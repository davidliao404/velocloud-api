<?php
/**
 * LinkQualityObjectTimeseriesDataMetadataMetrics
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
 * LinkQualityObjectTimeseriesDataMetadataMetrics Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkQualityObjectTimeseriesDataMetadataMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'link_quality_object_timeseries_data_metadata_metrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'traffic_type' => 'int',
        'action' => 'int',
        'metric' => 'int',
        'before_state' => 'int',
        'after_state' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'traffic_type' => null,
        'action' => null,
        'metric' => null,
        'before_state' => null,
        'after_state' => null
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
        'traffic_type' => 'trafficType',
        'action' => 'action',
        'metric' => 'metric',
        'before_state' => 'beforeState',
        'after_state' => 'afterState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'traffic_type' => 'setTrafficType',
        'action' => 'setAction',
        'metric' => 'setMetric',
        'before_state' => 'setBeforeState',
        'after_state' => 'setAfterState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'traffic_type' => 'getTrafficType',
        'action' => 'getAction',
        'metric' => 'getMetric',
        'before_state' => 'getBeforeState',
        'after_state' => 'getAfterState'
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
        $this->container['traffic_type'] = isset($data['traffic_type']) ? $data['traffic_type'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['before_state'] = isset($data['before_state']) ? $data['before_state'] : null;
        $this->container['after_state'] = isset($data['after_state']) ? $data['after_state'] : null;
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
     * Gets traffic_type
     *
     * @return int
     */
    public function getTrafficType()
    {
        return $this->container['traffic_type'];
    }

    /**
     * Sets traffic_type
     *
     * @param int $traffic_type traffic_type
     *
     * @return $this
     */
    public function setTrafficType($traffic_type)
    {
        $this->container['traffic_type'] = $traffic_type;

        return $this;
    }

    /**
     * Gets action
     *
     * @return int
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param int $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets metric
     *
     * @return int
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param int $metric metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;

        return $this;
    }

    /**
     * Gets before_state
     *
     * @return int
     */
    public function getBeforeState()
    {
        return $this->container['before_state'];
    }

    /**
     * Sets before_state
     *
     * @param int $before_state before_state
     *
     * @return $this
     */
    public function setBeforeState($before_state)
    {
        $this->container['before_state'] = $before_state;

        return $this;
    }

    /**
     * Gets after_state
     *
     * @return int
     */
    public function getAfterState()
    {
        return $this->container['after_state'];
    }

    /**
     * Sets after_state
     *
     * @param int $after_state after_state
     *
     * @return $this
     */
    public function setAfterState($after_state)
    {
        $this->container['after_state'] = $after_state;

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

