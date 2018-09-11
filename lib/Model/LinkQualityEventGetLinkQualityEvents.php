<?php
/**
 * LinkQualityEventGetLinkQualityEvents
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
 * LinkQualityEventGetLinkQualityEvents Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkQualityEventGetLinkQualityEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'link_quality_event_get_link_quality_events';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'edge_id' => 'int',
        'interval' => '\Swagger\Client\Model\Interval',
        'max_samples' => 'int',
        'individual_scores' => 'bool',
        'minutes_per_sample' => 'int',
        'debug' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'edge_id' => null,
        'interval' => null,
        'max_samples' => null,
        'individual_scores' => null,
        'minutes_per_sample' => null,
        'debug' => null
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
        'edge_id' => 'edgeId',
        'interval' => 'interval',
        'max_samples' => 'maxSamples',
        'individual_scores' => 'individualScores',
        'minutes_per_sample' => 'minutesPerSample',
        'debug' => 'debug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'edge_id' => 'setEdgeId',
        'interval' => 'setInterval',
        'max_samples' => 'setMaxSamples',
        'individual_scores' => 'setIndividualScores',
        'minutes_per_sample' => 'setMinutesPerSample',
        'debug' => 'setDebug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'edge_id' => 'getEdgeId',
        'interval' => 'getInterval',
        'max_samples' => 'getMaxSamples',
        'individual_scores' => 'getIndividualScores',
        'minutes_per_sample' => 'getMinutesPerSample',
        'debug' => 'getDebug'
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
        $this->container['edge_id'] = isset($data['edge_id']) ? $data['edge_id'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['max_samples'] = isset($data['max_samples']) ? $data['max_samples'] : null;
        $this->container['individual_scores'] = isset($data['individual_scores']) ? $data['individual_scores'] : null;
        $this->container['minutes_per_sample'] = isset($data['minutes_per_sample']) ? $data['minutes_per_sample'] : null;
        $this->container['debug'] = isset($data['debug']) ? $data['debug'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['edge_id'] === null) {
            $invalidProperties[] = "'edge_id' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
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

        if ($this->container['edge_id'] === null) {
            return false;
        }
        if ($this->container['interval'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets edge_id
     *
     * @return int
     */
    public function getEdgeId()
    {
        return $this->container['edge_id'];
    }

    /**
     * Sets edge_id
     *
     * @param int $edge_id edge_id
     *
     * @return $this
     */
    public function setEdgeId($edge_id)
    {
        $this->container['edge_id'] = $edge_id;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return \Swagger\Client\Model\Interval
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param \Swagger\Client\Model\Interval $interval interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets max_samples
     *
     * @return int
     */
    public function getMaxSamples()
    {
        return $this->container['max_samples'];
    }

    /**
     * Sets max_samples
     *
     * @param int $max_samples max_samples
     *
     * @return $this
     */
    public function setMaxSamples($max_samples)
    {
        $this->container['max_samples'] = $max_samples;

        return $this;
    }

    /**
     * Gets individual_scores
     *
     * @return bool
     */
    public function getIndividualScores()
    {
        return $this->container['individual_scores'];
    }

    /**
     * Sets individual_scores
     *
     * @param bool $individual_scores individual_scores
     *
     * @return $this
     */
    public function setIndividualScores($individual_scores)
    {
        $this->container['individual_scores'] = $individual_scores;

        return $this;
    }

    /**
     * Gets minutes_per_sample
     *
     * @return int
     */
    public function getMinutesPerSample()
    {
        return $this->container['minutes_per_sample'];
    }

    /**
     * Sets minutes_per_sample
     *
     * @param int $minutes_per_sample minutes_per_sample
     *
     * @return $this
     */
    public function setMinutesPerSample($minutes_per_sample)
    {
        $this->container['minutes_per_sample'] = $minutes_per_sample;

        return $this;
    }

    /**
     * Gets debug
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->container['debug'];
    }

    /**
     * Sets debug
     *
     * @param bool $debug debug
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->container['debug'] = $debug;

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


