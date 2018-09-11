<?php
/**
 * EdgeDeviceSettingsDataDhcpServer
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
 * EdgeDeviceSettingsDataDhcpServer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeDeviceSettingsDataDhcpServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'edgeDeviceSettingsDataDhcpServer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_dhcp_addr' => 'int',
        'enabled' => 'bool',
        'lease_time_seconds' => 'int',
        'dhcp_relay' => '\Swagger\Client\Model\EdgeDeviceSettingsDataLanDhcpDhcpRelay',
        'num_dhcp_addr' => 'int',
        'static_reserved' => 'int',
        'options' => '\Swagger\Client\Model\EdgeDeviceSettingsDataDhcpServerOptions[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_dhcp_addr' => null,
        'enabled' => null,
        'lease_time_seconds' => null,
        'dhcp_relay' => null,
        'num_dhcp_addr' => null,
        'static_reserved' => null,
        'options' => null
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
        'base_dhcp_addr' => 'baseDhcpAddr',
        'enabled' => 'enabled',
        'lease_time_seconds' => 'leaseTimeSeconds',
        'dhcp_relay' => 'dhcpRelay',
        'num_dhcp_addr' => 'numDhcpAddr',
        'static_reserved' => 'staticReserved',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_dhcp_addr' => 'setBaseDhcpAddr',
        'enabled' => 'setEnabled',
        'lease_time_seconds' => 'setLeaseTimeSeconds',
        'dhcp_relay' => 'setDhcpRelay',
        'num_dhcp_addr' => 'setNumDhcpAddr',
        'static_reserved' => 'setStaticReserved',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_dhcp_addr' => 'getBaseDhcpAddr',
        'enabled' => 'getEnabled',
        'lease_time_seconds' => 'getLeaseTimeSeconds',
        'dhcp_relay' => 'getDhcpRelay',
        'num_dhcp_addr' => 'getNumDhcpAddr',
        'static_reserved' => 'getStaticReserved',
        'options' => 'getOptions'
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
        $this->container['base_dhcp_addr'] = isset($data['base_dhcp_addr']) ? $data['base_dhcp_addr'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['lease_time_seconds'] = isset($data['lease_time_seconds']) ? $data['lease_time_seconds'] : null;
        $this->container['dhcp_relay'] = isset($data['dhcp_relay']) ? $data['dhcp_relay'] : null;
        $this->container['num_dhcp_addr'] = isset($data['num_dhcp_addr']) ? $data['num_dhcp_addr'] : null;
        $this->container['static_reserved'] = isset($data['static_reserved']) ? $data['static_reserved'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
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
     * Gets base_dhcp_addr
     *
     * @return int
     */
    public function getBaseDhcpAddr()
    {
        return $this->container['base_dhcp_addr'];
    }

    /**
     * Sets base_dhcp_addr
     *
     * @param int $base_dhcp_addr base_dhcp_addr
     *
     * @return $this
     */
    public function setBaseDhcpAddr($base_dhcp_addr)
    {
        $this->container['base_dhcp_addr'] = $base_dhcp_addr;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets lease_time_seconds
     *
     * @return int
     */
    public function getLeaseTimeSeconds()
    {
        return $this->container['lease_time_seconds'];
    }

    /**
     * Sets lease_time_seconds
     *
     * @param int $lease_time_seconds lease_time_seconds
     *
     * @return $this
     */
    public function setLeaseTimeSeconds($lease_time_seconds)
    {
        $this->container['lease_time_seconds'] = $lease_time_seconds;

        return $this;
    }

    /**
     * Gets dhcp_relay
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataLanDhcpDhcpRelay
     */
    public function getDhcpRelay()
    {
        return $this->container['dhcp_relay'];
    }

    /**
     * Sets dhcp_relay
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataLanDhcpDhcpRelay $dhcp_relay dhcp_relay
     *
     * @return $this
     */
    public function setDhcpRelay($dhcp_relay)
    {
        $this->container['dhcp_relay'] = $dhcp_relay;

        return $this;
    }

    /**
     * Gets num_dhcp_addr
     *
     * @return int
     */
    public function getNumDhcpAddr()
    {
        return $this->container['num_dhcp_addr'];
    }

    /**
     * Sets num_dhcp_addr
     *
     * @param int $num_dhcp_addr num_dhcp_addr
     *
     * @return $this
     */
    public function setNumDhcpAddr($num_dhcp_addr)
    {
        $this->container['num_dhcp_addr'] = $num_dhcp_addr;

        return $this;
    }

    /**
     * Gets static_reserved
     *
     * @return int
     */
    public function getStaticReserved()
    {
        return $this->container['static_reserved'];
    }

    /**
     * Sets static_reserved
     *
     * @param int $static_reserved static_reserved
     *
     * @return $this
     */
    public function setStaticReserved($static_reserved)
    {
        $this->container['static_reserved'] = $static_reserved;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataDhcpServerOptions[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataDhcpServerOptions[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


