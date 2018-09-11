<?php
/**
 * NetworkInsertNetworkGatewayPool
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
 * NetworkInsertNetworkGatewayPool Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworkInsertNetworkGatewayPool implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'network_insert_network_gateway_pool';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'network_id' => 'int',
        'enterprise_proxy_id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'hand_off_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'network_id' => null,
        'enterprise_proxy_id' => null,
        'name' => null,
        'description' => null,
        'hand_off_type' => null
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
        'network_id' => 'networkId',
        'enterprise_proxy_id' => 'enterpriseProxyId',
        'name' => 'name',
        'description' => 'description',
        'hand_off_type' => 'handOffType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'network_id' => 'setNetworkId',
        'enterprise_proxy_id' => 'setEnterpriseProxyId',
        'name' => 'setName',
        'description' => 'setDescription',
        'hand_off_type' => 'setHandOffType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'network_id' => 'getNetworkId',
        'enterprise_proxy_id' => 'getEnterpriseProxyId',
        'name' => 'getName',
        'description' => 'getDescription',
        'hand_off_type' => 'getHandOffType'
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

    const HAND_OFF_TYPE_NONE = 'NONE';
    const HAND_OFF_TYPE_ALLOW = 'ALLOW';
    const HAND_OFF_TYPE_ONLY = 'ONLY';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandOffTypeAllowableValues()
    {
        return [
            self::HAND_OFF_TYPE_NONE,
            self::HAND_OFF_TYPE_ALLOW,
            self::HAND_OFF_TYPE_ONLY,
        ];
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
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['enterprise_proxy_id'] = isset($data['enterprise_proxy_id']) ? $data['enterprise_proxy_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hand_off_type'] = isset($data['hand_off_type']) ? $data['hand_off_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['network_id'] === null) {
            $invalidProperties[] = "'network_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getHandOffTypeAllowableValues();
        if (!in_array($this->container['hand_off_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hand_off_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        if ($this->container['network_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        $allowedValues = $this->getHandOffTypeAllowableValues();
        if (!in_array($this->container['hand_off_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets network_id
     *
     * @return int
     */
    public function getNetworkId()
    {
        return $this->container['network_id'];
    }

    /**
     * Sets network_id
     *
     * @param int $network_id network_id
     *
     * @return $this
     */
    public function setNetworkId($network_id)
    {
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets enterprise_proxy_id
     *
     * @return int
     */
    public function getEnterpriseProxyId()
    {
        return $this->container['enterprise_proxy_id'];
    }

    /**
     * Sets enterprise_proxy_id
     *
     * @param int $enterprise_proxy_id enterprise_proxy_id
     *
     * @return $this
     */
    public function setEnterpriseProxyId($enterprise_proxy_id)
    {
        $this->container['enterprise_proxy_id'] = $enterprise_proxy_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets hand_off_type
     *
     * @return string
     */
    public function getHandOffType()
    {
        return $this->container['hand_off_type'];
    }

    /**
     * Sets hand_off_type
     *
     * @param string $hand_off_type hand_off_type
     *
     * @return $this
     */
    public function setHandOffType($hand_off_type)
    {
        $allowedValues = $this->getHandOffTypeAllowableValues();
        if (!is_null($hand_off_type) && !in_array($hand_off_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hand_off_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hand_off_type'] = $hand_off_type;

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


