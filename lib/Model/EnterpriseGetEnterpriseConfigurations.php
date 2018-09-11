<?php
/**
 * EnterpriseGetEnterpriseConfigurations
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
 * EnterpriseGetEnterpriseConfigurations Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseGetEnterpriseConfigurations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_get_enterprise_configurations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enterprise_id' => 'int',
        'configuration_type' => 'string',
        'with' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enterprise_id' => null,
        'configuration_type' => null,
        'with' => null
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
        'enterprise_id' => 'enterpriseId',
        'configuration_type' => 'configurationType',
        'with' => 'with'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enterprise_id' => 'setEnterpriseId',
        'configuration_type' => 'setConfigurationType',
        'with' => 'setWith'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enterprise_id' => 'getEnterpriseId',
        'configuration_type' => 'getConfigurationType',
        'with' => 'getWith'
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

    const CONFIGURATION_TYPE_NETWORK_BASED = 'NETWORK_BASED';
    const CONFIGURATION_TYPE_SEGMENT_BASED = 'SEGMENT_BASED';
    const WITH_EDGES = 'edges';
    const WITH_MODULES = 'modules';
    const WITH_EDGE_COUNT = 'edgeCount';
    const WITH_REFS = 'refs';
    const WITH_DEVICE_SETTINGS = 'deviceSettings';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConfigurationTypeAllowableValues()
    {
        return [
            self::CONFIGURATION_TYPE_NETWORK_BASED,
            self::CONFIGURATION_TYPE_SEGMENT_BASED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWithAllowableValues()
    {
        return [
            self::WITH_EDGES,
            self::WITH_MODULES,
            self::WITH_EDGE_COUNT,
            self::WITH_REFS,
            self::WITH_DEVICE_SETTINGS,
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
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['configuration_type'] = isset($data['configuration_type']) ? $data['configuration_type'] : null;
        $this->container['with'] = isset($data['with']) ? $data['with'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['enterprise_id'] === null) {
            $invalidProperties[] = "'enterprise_id' can't be null";
        }
        $allowedValues = $this->getConfigurationTypeAllowableValues();
        if (!in_array($this->container['configuration_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'configuration_type', must be one of '%s'",
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

        if ($this->container['enterprise_id'] === null) {
            return false;
        }
        $allowedValues = $this->getConfigurationTypeAllowableValues();
        if (!in_array($this->container['configuration_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets enterprise_id
     *
     * @return int
     */
    public function getEnterpriseId()
    {
        return $this->container['enterprise_id'];
    }

    /**
     * Sets enterprise_id
     *
     * @param int $enterprise_id enterprise_id
     *
     * @return $this
     */
    public function setEnterpriseId($enterprise_id)
    {
        $this->container['enterprise_id'] = $enterprise_id;

        return $this;
    }

    /**
     * Gets configuration_type
     *
     * @return string
     */
    public function getConfigurationType()
    {
        return $this->container['configuration_type'];
    }

    /**
     * Sets configuration_type
     *
     * @param string $configuration_type configuration_type
     *
     * @return $this
     */
    public function setConfigurationType($configuration_type)
    {
        $allowedValues = $this->getConfigurationTypeAllowableValues();
        if (!is_null($configuration_type) && !in_array($configuration_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'configuration_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['configuration_type'] = $configuration_type;

        return $this;
    }

    /**
     * Gets with
     *
     * @return string[]
     */
    public function getWith()
    {
        return $this->container['with'];
    }

    /**
     * Sets with
     *
     * @param string[] $with with
     *
     * @return $this
     */
    public function setWith($with)
    {
        $allowedValues = $this->getWithAllowableValues();
        if (!is_null($with) && array_diff($with, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'with', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['with'] = $with;

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


