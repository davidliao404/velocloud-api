<?php
/**
 * EnterpriseupdateEnterpriseRouteConfigurationData
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
 * EnterpriseupdateEnterpriseRouteConfigurationData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseupdateEnterpriseRouteConfigurationData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterpriseupdateEnterpriseRouteConfiguration_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'edge' => '\Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataEdge',
        'hub' => '\Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataEdge',
        'partner_gateway' => '\Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataPartnerGateway',
        'routing_preference' => '\Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataRoutingPreference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'edge' => null,
        'hub' => null,
        'partner_gateway' => null,
        'routing_preference' => null
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
        'edge' => 'edge',
        'hub' => 'hub',
        'partner_gateway' => 'partnerGateway',
        'routing_preference' => 'routingPreference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'edge' => 'setEdge',
        'hub' => 'setHub',
        'partner_gateway' => 'setPartnerGateway',
        'routing_preference' => 'setRoutingPreference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'edge' => 'getEdge',
        'hub' => 'getHub',
        'partner_gateway' => 'getPartnerGateway',
        'routing_preference' => 'getRoutingPreference'
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
        $this->container['edge'] = isset($data['edge']) ? $data['edge'] : null;
        $this->container['hub'] = isset($data['hub']) ? $data['hub'] : null;
        $this->container['partner_gateway'] = isset($data['partner_gateway']) ? $data['partner_gateway'] : null;
        $this->container['routing_preference'] = isset($data['routing_preference']) ? $data['routing_preference'] : null;
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
     * Gets edge
     *
     * @return \Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataEdge
     */
    public function getEdge()
    {
        return $this->container['edge'];
    }

    /**
     * Sets edge
     *
     * @param \Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataEdge $edge edge
     *
     * @return $this
     */
    public function setEdge($edge)
    {
        $this->container['edge'] = $edge;

        return $this;
    }

    /**
     * Gets hub
     *
     * @return \Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataEdge
     */
    public function getHub()
    {
        return $this->container['hub'];
    }

    /**
     * Sets hub
     *
     * @param \Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataEdge $hub hub
     *
     * @return $this
     */
    public function setHub($hub)
    {
        $this->container['hub'] = $hub;

        return $this;
    }

    /**
     * Gets partner_gateway
     *
     * @return \Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataPartnerGateway
     */
    public function getPartnerGateway()
    {
        return $this->container['partner_gateway'];
    }

    /**
     * Sets partner_gateway
     *
     * @param \Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataPartnerGateway $partner_gateway partner_gateway
     *
     * @return $this
     */
    public function setPartnerGateway($partner_gateway)
    {
        $this->container['partner_gateway'] = $partner_gateway;

        return $this;
    }

    /**
     * Gets routing_preference
     *
     * @return \Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataRoutingPreference[]
     */
    public function getRoutingPreference()
    {
        return $this->container['routing_preference'];
    }

    /**
     * Sets routing_preference
     *
     * @param \Swagger\Client\Model\EnterpriseupdateEnterpriseRouteConfigurationDataRoutingPreference[] $routing_preference routing_preference
     *
     * @return $this
     */
    public function setRoutingPreference($routing_preference)
    {
        $this->container['routing_preference'] = $routing_preference;

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

