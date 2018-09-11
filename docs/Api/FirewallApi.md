# Swagger\Client\FirewallApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**firewallGetEnterpriseFirewallLogs**](FirewallApi.md#firewallGetEnterpriseFirewallLogs) | **POST** /firewall/getEnterpriseFirewallLogs | Get enterprise firewall logs


# **firewallGetEnterpriseFirewallLogs**
> \Swagger\Client\Model\FirewallGetEnterpriseFirewallLogsResult firewallGetEnterpriseFirewallLogs($body)

Get enterprise firewall logs

Retrieve enterprise firewall logs.  Privileges required:  `READ` `EDGE`  `VIEW_FIREWALL_LOGS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FirewallGetEnterpriseFirewallLogs(); // \Swagger\Client\Model\FirewallGetEnterpriseFirewallLogs | 

try {
    $result = $apiInstance->firewallGetEnterpriseFirewallLogs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->firewallGetEnterpriseFirewallLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FirewallGetEnterpriseFirewallLogs**](../Model/FirewallGetEnterpriseFirewallLogs.md)|  |

### Return type

[**\Swagger\Client\Model\FirewallGetEnterpriseFirewallLogsResult**](../Model/FirewallGetEnterpriseFirewallLogsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

