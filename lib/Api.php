<?php
/**
 * Velocloud\Api\Client
 */

namespace Velocloud;


use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;


class Api {
    
    /********************************************************************************
     * Function: __construct()
     * Args: ['url' => velocloud_url, 'username' => username. 'password' => password]
     ********************************************************************************/
   
    public function __construct($args) {
    
        // Defaults
        
        $this->config['loginMethod'] = 'enterprise';
        $this->debug = 1;    
        foreach (['url','username','password'] as $arg) { 
            if (isset($args[$arg])) { $this->config[$arg] = $args[$arg]; }
            else                    { throw new Exception('Velocloud\Api() requires arg "$arg".'); }
        }
        
        // Login to the veloCloud
        if ($this->config['loginMethod'] === 'enterprise') { $this->enterpriseLogin(); }
    }
    
    
    
    /****************************************
     * Function: enterpriseLogin()
     * API Method: login/enterpriseLogin
     ****************************************/

    public function enterpriseLogin() {

		$config = $this->config;
        
        $url 		= $config['url'];
        $username 	= $config['username'];
        $password 	= $config['password'];

        // Keep a cookie jar as the Velocloud API passes not only session hashes back in cookies, but messages as well
		$jar = new \GuzzleHttp\Cookie\CookieJar;
		$client = new \GuzzleHttp\Client([
			'base_uri' => $url,
			'cookies' => $jar
		]);
		
		error_log("Logging into Velocloud Orchestrator:$url with username:$username and password:$password");

		$result = $client->post('login/enterpriseLogin',[
			'body' => json_encode([ 'username' => $username, 'password' => $password])
		]);		
		
		// Lets look for the velocloud.session cookie
		
		$velocloudSession = $jar->getCookieByName('velocloud.session');
		$velocloudMessage = $jar->getCookieByName('velocloud.message');
		
		if ($velocloudSession) {
			
			$this->cookies = $jar;
            $this->client = $client;
            $enterpriseData = $this->enterpriseGetEnterprise();
            
            $this->enterpriseId = $enterpriseData->result->id ? $enterpriseData->result->id : false;
			error_log("Logged into Velocloud successfully with session: $velocloudSession");
            return($client);
		}
		else {
			error_log("Error logging in to Velocloud: $velocloudMessage");
		}
		
	}

    /****************************************
     * Function: enterpriseGetEnterprise()
     * API Method: enterprise/getEnterprise
     ****************************************/

    public function enterpriseGetEnterprise() {
    
        $client = $this->client ? $this->client : $this->enterpriseLogin();
        
        $requestBody = [
			"jsonrpc"	=> "2.0",
			"method" 	=> "enterprise/getEnterprise",
            "id"        => 1
		];
		
        $data = $this->apiFetch($requestBody);
        if (isset($this->debug) && ($this->debug)) { error_log("Enterprise data: ".print_r($data,1)); }
        return($data);
    }
    
    /****************************************
     * Function: enterpriseGetEnterpriseEdges()
     * API Method: enterprise/getEnterpriseEdges
     ****************************************/

    public function enterpriseGetEnterpriseEdges($args) {
        
        $client = $this->client ? $this->client : $this->enterpriseLogin();
        
        $params = [
            "with" => ["site", "configuration", "recentLinks", "cloudServiceSiteStatus", "vnfs"]
        ];
        
        $requestBody = [
			"jsonrpc"	=> "2.0",
			"method" 	=> "enterprise/getEnterpriseEdges",
            "id"        => $this->enterpriseId,
            "params"    => $params
		];
		print "Fetching data with apiFetch()...";
        $data = $this->apiFetch($requestBody);
        
        if (isset($this->debug) && ($this->debug)) { error_log("Enterprise Edge Data: ".print_r($data,1)); }
        return($data->result);
        
    }
    
    
    /****************************************
     * Function: getLinkQualityEvents()
     * API Method: enterprise/getEnterprise
     ****************************************/

    public function getLinkQualityEvents($args) {
        
    
        if (isset($this->debug) && ($this->debug)) { error_log("Checking for enterprise login..."); }
        $client = $this->client ? $this->client : $this->enterpriseLogin();
        if (isset($this->debug) && ($this->debug)) { error_log("Done."); }
        
        $params = [
			"maxSamples" 	=> isset($args['maxSamples'])   ? $args['maxSamples'] : 200,
			"interval" 		=> isset($args['interval'])     ? $args['interval'] : [ "start" => (int) (time() * 1000) - 86400000],
			"edgeId"		=> isset($args['edgeId'])       ? (int) $args['edgeId'] : false,
			"enterpriseId"	=> isset($args['enterpriseId']) ? $args['enterpriseId'] : $this->enterpriseId
		];
        
        $requestBody = [
			"jsonrpc"	=> "2.0",
			"method" 	=> "linkQualityEvent/getLinkQualityEvents",
            "id"        => 1,
            "params"    => $params
		];
		
        if (isset($this->debug) && ($this->debug)) {  error_log("Sending getLinkQualityEvents() with data:".print_r($requestBody,1)); }
        
        $data = $this->apiFetch($requestBody);
        if (isset($this->debug) && ($this->debug)) { error_log("Link Quality data: ".print_r($data,1)); }
        return($data);
    }
    
    /****************************************
     * Function: metricsGetEdgeLinkSeries()
     * API Method: metrics/getEdgeLinkSeries
     ****************************************/

    public function metricsGetEdgeLinkSeries($args) { 
		
		$client = $this->client ? $this->client : $this->enterpriseLogin();
        
		$params = [
			"metrics" 		=> isset($args['metrics'])  ? $args['metrics'] : ["bpsRx", "bpsTx", "bytesTx", "bpsOfBestPathTx", "bytesRx", "bpsOfBestPathRx"],
			"links"			=> isset($args['links'])    ? $args['links'] : false,
			"edgeId"		=> isset($args['edgeId'])   ? (int) $args['edgeId'] : false,
			"interval" 		=> isset($args['interval'])     ? $args['interval'] : [ "start" => (int) (time()-86400)],
			"enterpriseId"	=> isset($args['enterpriseId']) ? $args['enterpriseId'] : $this->enterpriseId
		];
		
        if (!$params['links']) { unset($params['links']);}
        
		$requestBody = [
			"jsonrpc"	=> "2.0",
			"method" 	=> "metrics/getEdgeLinkSeries",
			"params" 	=> $params,
			"id" 		=> 1
		];
		
		$jsonParams = json_encode($requestBody, JSON_UNESCAPED_SLASHES);
        
		error_log("\nfetchVelocloudThroughput:".print_r($params,1));
		error_log("JSON Body:$jsonParams");
		error_log("JSON from Con:".'{"jsonrpc":"2.0","method":"metrics/getEdgeLinkSeries","params":{"metrics":["bytesRx","bytesTx"],"links":[817,682,669],"edgeId":240,"interval":{"start":1536642650051},"enterpriseId":39},"id":15}');
		
		
		 $result = $client->post('/portal/',[
			'body' => json_encode($requestBody)
		]);	
		
		if ($result->hasHeader('Content-Length')) {
		
			$body = $result->getBody();
			$data = json_decode($body);
			return($data);
        }
		else {
			error_log("No response from metrics/getEdgeLinkSeries");
            throw new Exception("No response from metrics/getEdgeLinkSeries");
		}
	}

    /****************************************
     * Function: apiFetch()
     * Description: General helper for /portal
     ****************************************/
    
    private function apiFetch($requestBody) { 
		
		$jsonParams = json_encode($requestBody, JSON_UNESCAPED_SLASHES);
		$result = $this->client->post('/portal/',[
			'body' => json_encode($requestBody)
		]);	
		
		if ($result->hasHeader('Content-Length')) {
		
			$body = $result->getBody();
			$data = json_decode($body);
			return($data);
        }
		else {
			error_log("No response from ".$requestBody['method']);
            throw new Exception("No response from ".$requestBody['method']);
		}
	}
    
}
