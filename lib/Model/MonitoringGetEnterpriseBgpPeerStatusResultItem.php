<?php
/**
 * MonitoringGetEnterpriseBgpPeerStatusResultItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Velocloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MonitoringGetEnterpriseBgpPeerStatusResultItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MonitoringGetEnterpriseBgpPeerStatusResultItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'monitoring_get_enterprise_bgp_peer_status_result_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gateway_name' => 'string',
        'gateway_logical_id' => 'string',
        'neighbors' => '\Swagger\Client\Model\BgpPeerStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gateway_name' => null,
        'gateway_logical_id' => null,
        'neighbors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'gateway_name' => 'gatewayName',
        'gateway_logical_id' => 'gatewayLogicalId',
        'neighbors' => 'neighbors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gateway_name' => 'setGatewayName',
        'gateway_logical_id' => 'setGatewayLogicalId',
        'neighbors' => 'setNeighbors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gateway_name' => 'getGatewayName',
        'gateway_logical_id' => 'getGatewayLogicalId',
        'neighbors' => 'getNeighbors'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['gateway_name'] = isset($data['gateway_name']) ? $data['gateway_name'] : null;
        $this->container['gateway_logical_id'] = isset($data['gateway_logical_id']) ? $data['gateway_logical_id'] : null;
        $this->container['neighbors'] = isset($data['neighbors']) ? $data['neighbors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets gateway_name
     *
     * @return string
     */
    public function getGatewayName()
    {
        return $this->container['gateway_name'];
    }

    /**
     * Sets gateway_name
     *
     * @param string $gateway_name gateway_name
     *
     * @return $this
     */
    public function setGatewayName($gateway_name)
    {
        $this->container['gateway_name'] = $gateway_name;

        return $this;
    }

    /**
     * Gets gateway_logical_id
     *
     * @return string
     */
    public function getGatewayLogicalId()
    {
        return $this->container['gateway_logical_id'];
    }

    /**
     * Sets gateway_logical_id
     *
     * @param string $gateway_logical_id gateway_logical_id
     *
     * @return $this
     */
    public function setGatewayLogicalId($gateway_logical_id)
    {
        $this->container['gateway_logical_id'] = $gateway_logical_id;

        return $this;
    }

    /**
     * Gets neighbors
     *
     * @return \Swagger\Client\Model\BgpPeerStatus[]
     */
    public function getNeighbors()
    {
        return $this->container['neighbors'];
    }

    /**
     * Sets neighbors
     *
     * @param \Swagger\Client\Model\BgpPeerStatus[] $neighbors neighbors
     *
     * @return $this
     */
    public function setNeighbors($neighbors)
    {
        $this->container['neighbors'] = $neighbors;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


