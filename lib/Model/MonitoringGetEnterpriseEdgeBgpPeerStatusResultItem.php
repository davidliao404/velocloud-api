<?php
/**
 * MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem
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
 * MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'monitoring_get_enterprise_edge_bgp_peer_status_result_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'edge_name' => 'string',
        'edge_id' => 'int',
        'edge_logical_id' => 'string',
        'neighbors' => '\Swagger\Client\Model\BgpPeerStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'edge_name' => null,
        'edge_id' => null,
        'edge_logical_id' => null,
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
        'edge_name' => 'edgeName',
        'edge_id' => 'edgeId',
        'edge_logical_id' => 'edgeLogicalId',
        'neighbors' => 'neighbors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'edge_name' => 'setEdgeName',
        'edge_id' => 'setEdgeId',
        'edge_logical_id' => 'setEdgeLogicalId',
        'neighbors' => 'setNeighbors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'edge_name' => 'getEdgeName',
        'edge_id' => 'getEdgeId',
        'edge_logical_id' => 'getEdgeLogicalId',
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
        $this->container['edge_name'] = isset($data['edge_name']) ? $data['edge_name'] : null;
        $this->container['edge_id'] = isset($data['edge_id']) ? $data['edge_id'] : null;
        $this->container['edge_logical_id'] = isset($data['edge_logical_id']) ? $data['edge_logical_id'] : null;
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
     * Gets edge_name
     *
     * @return string
     */
    public function getEdgeName()
    {
        return $this->container['edge_name'];
    }

    /**
     * Sets edge_name
     *
     * @param string $edge_name edge_name
     *
     * @return $this
     */
    public function setEdgeName($edge_name)
    {
        $this->container['edge_name'] = $edge_name;

        return $this;
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
     * Gets edge_logical_id
     *
     * @return string
     */
    public function getEdgeLogicalId()
    {
        return $this->container['edge_logical_id'];
    }

    /**
     * Sets edge_logical_id
     *
     * @param string $edge_logical_id edge_logical_id
     *
     * @return $this
     */
    public function setEdgeLogicalId($edge_logical_id)
    {
        $this->container['edge_logical_id'] = $edge_logical_id;

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


