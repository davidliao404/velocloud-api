<?php
/**
 * DisasterRecoveryGetReplicationStatusResultClientCount
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
 * OpenAPI spec version: 3.2.11
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
 * DisasterRecoveryGetReplicationStatusResultClientCount Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisasterRecoveryGetReplicationStatusResultClientCount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'disaster_recovery_get_replication_status_result_clientCount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'edge_count' => 'int',
        'gateway_count' => 'int',
        'current_active_edge_count' => 'int',
        'current_standby_edge_count' => 'int',
        'current_active_gateway_count' => 'int',
        'current_standby_gateway_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'edge_count' => null,
        'gateway_count' => null,
        'current_active_edge_count' => null,
        'current_standby_edge_count' => null,
        'current_active_gateway_count' => null,
        'current_standby_gateway_count' => null
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
        'edge_count' => 'edgeCount',
        'gateway_count' => 'gatewayCount',
        'current_active_edge_count' => 'currentActiveEdgeCount',
        'current_standby_edge_count' => 'currentStandbyEdgeCount',
        'current_active_gateway_count' => 'currentActiveGatewayCount',
        'current_standby_gateway_count' => 'currentStandbyGatewayCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'edge_count' => 'setEdgeCount',
        'gateway_count' => 'setGatewayCount',
        'current_active_edge_count' => 'setCurrentActiveEdgeCount',
        'current_standby_edge_count' => 'setCurrentStandbyEdgeCount',
        'current_active_gateway_count' => 'setCurrentActiveGatewayCount',
        'current_standby_gateway_count' => 'setCurrentStandbyGatewayCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'edge_count' => 'getEdgeCount',
        'gateway_count' => 'getGatewayCount',
        'current_active_edge_count' => 'getCurrentActiveEdgeCount',
        'current_standby_edge_count' => 'getCurrentStandbyEdgeCount',
        'current_active_gateway_count' => 'getCurrentActiveGatewayCount',
        'current_standby_gateway_count' => 'getCurrentStandbyGatewayCount'
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
        $this->container['edge_count'] = isset($data['edge_count']) ? $data['edge_count'] : null;
        $this->container['gateway_count'] = isset($data['gateway_count']) ? $data['gateway_count'] : null;
        $this->container['current_active_edge_count'] = isset($data['current_active_edge_count']) ? $data['current_active_edge_count'] : null;
        $this->container['current_standby_edge_count'] = isset($data['current_standby_edge_count']) ? $data['current_standby_edge_count'] : null;
        $this->container['current_active_gateway_count'] = isset($data['current_active_gateway_count']) ? $data['current_active_gateway_count'] : null;
        $this->container['current_standby_gateway_count'] = isset($data['current_standby_gateway_count']) ? $data['current_standby_gateway_count'] : null;
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
     * Gets edge_count
     *
     * @return int
     */
    public function getEdgeCount()
    {
        return $this->container['edge_count'];
    }

    /**
     * Sets edge_count
     *
     * @param int $edge_count edge_count
     *
     * @return $this
     */
    public function setEdgeCount($edge_count)
    {
        $this->container['edge_count'] = $edge_count;

        return $this;
    }

    /**
     * Gets gateway_count
     *
     * @return int
     */
    public function getGatewayCount()
    {
        return $this->container['gateway_count'];
    }

    /**
     * Sets gateway_count
     *
     * @param int $gateway_count gateway_count
     *
     * @return $this
     */
    public function setGatewayCount($gateway_count)
    {
        $this->container['gateway_count'] = $gateway_count;

        return $this;
    }

    /**
     * Gets current_active_edge_count
     *
     * @return int
     */
    public function getCurrentActiveEdgeCount()
    {
        return $this->container['current_active_edge_count'];
    }

    /**
     * Sets current_active_edge_count
     *
     * @param int $current_active_edge_count current_active_edge_count
     *
     * @return $this
     */
    public function setCurrentActiveEdgeCount($current_active_edge_count)
    {
        $this->container['current_active_edge_count'] = $current_active_edge_count;

        return $this;
    }

    /**
     * Gets current_standby_edge_count
     *
     * @return int
     */
    public function getCurrentStandbyEdgeCount()
    {
        return $this->container['current_standby_edge_count'];
    }

    /**
     * Sets current_standby_edge_count
     *
     * @param int $current_standby_edge_count current_standby_edge_count
     *
     * @return $this
     */
    public function setCurrentStandbyEdgeCount($current_standby_edge_count)
    {
        $this->container['current_standby_edge_count'] = $current_standby_edge_count;

        return $this;
    }

    /**
     * Gets current_active_gateway_count
     *
     * @return int
     */
    public function getCurrentActiveGatewayCount()
    {
        return $this->container['current_active_gateway_count'];
    }

    /**
     * Sets current_active_gateway_count
     *
     * @param int $current_active_gateway_count current_active_gateway_count
     *
     * @return $this
     */
    public function setCurrentActiveGatewayCount($current_active_gateway_count)
    {
        $this->container['current_active_gateway_count'] = $current_active_gateway_count;

        return $this;
    }

    /**
     * Gets current_standby_gateway_count
     *
     * @return int
     */
    public function getCurrentStandbyGatewayCount()
    {
        return $this->container['current_standby_gateway_count'];
    }

    /**
     * Sets current_standby_gateway_count
     *
     * @param int $current_standby_gateway_count current_standby_gateway_count
     *
     * @return $this
     */
    public function setCurrentStandbyGatewayCount($current_standby_gateway_count)
    {
        $this->container['current_standby_gateway_count'] = $current_standby_gateway_count;

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


