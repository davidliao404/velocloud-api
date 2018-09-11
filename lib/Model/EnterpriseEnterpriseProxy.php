<?php
/**
 * EnterpriseEnterpriseProxy
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
 * EnterpriseEnterpriseProxy Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseEnterpriseProxy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_enterprise_proxy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'network_id' => 'int',
        'proxy_type' => 'string',
        'operate_gateways' => 'bool',
        'logical_id' => 'string',
        'name' => 'string',
        'domain' => 'string',
        'prefix' => 'string',
        'description' => 'string',
        'contact_name' => 'string',
        'contact_phone' => 'string',
        'contact_mobile' => 'string',
        'contact_email' => 'string',
        'street_address' => 'string',
        'street_address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'lat' => 'float',
        'lon' => 'float',
        'modified' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'created' => 'date-time',
        'network_id' => null,
        'proxy_type' => null,
        'operate_gateways' => null,
        'logical_id' => null,
        'name' => null,
        'domain' => null,
        'prefix' => null,
        'description' => null,
        'contact_name' => null,
        'contact_phone' => null,
        'contact_mobile' => null,
        'contact_email' => null,
        'street_address' => null,
        'street_address2' => null,
        'city' => null,
        'state' => null,
        'postal_code' => null,
        'country' => null,
        'lat' => null,
        'lon' => null,
        'modified' => 'date-time'
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
        'id' => 'id',
        'created' => 'created',
        'network_id' => 'networkId',
        'proxy_type' => 'proxyType',
        'operate_gateways' => 'operateGateways',
        'logical_id' => 'logicalId',
        'name' => 'name',
        'domain' => 'domain',
        'prefix' => 'prefix',
        'description' => 'description',
        'contact_name' => 'contactName',
        'contact_phone' => 'contactPhone',
        'contact_mobile' => 'contactMobile',
        'contact_email' => 'contactEmail',
        'street_address' => 'streetAddress',
        'street_address2' => 'streetAddress2',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postalCode',
        'country' => 'country',
        'lat' => 'lat',
        'lon' => 'lon',
        'modified' => 'modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'network_id' => 'setNetworkId',
        'proxy_type' => 'setProxyType',
        'operate_gateways' => 'setOperateGateways',
        'logical_id' => 'setLogicalId',
        'name' => 'setName',
        'domain' => 'setDomain',
        'prefix' => 'setPrefix',
        'description' => 'setDescription',
        'contact_name' => 'setContactName',
        'contact_phone' => 'setContactPhone',
        'contact_mobile' => 'setContactMobile',
        'contact_email' => 'setContactEmail',
        'street_address' => 'setStreetAddress',
        'street_address2' => 'setStreetAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'lat' => 'setLat',
        'lon' => 'setLon',
        'modified' => 'setModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'network_id' => 'getNetworkId',
        'proxy_type' => 'getProxyType',
        'operate_gateways' => 'getOperateGateways',
        'logical_id' => 'getLogicalId',
        'name' => 'getName',
        'domain' => 'getDomain',
        'prefix' => 'getPrefix',
        'description' => 'getDescription',
        'contact_name' => 'getContactName',
        'contact_phone' => 'getContactPhone',
        'contact_mobile' => 'getContactMobile',
        'contact_email' => 'getContactEmail',
        'street_address' => 'getStreetAddress',
        'street_address2' => 'getStreetAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'lat' => 'getLat',
        'lon' => 'getLon',
        'modified' => 'getModified'
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

    const PROXY_TYPE_PARTNER = 'PARTNER';
    const PROXY_TYPE_MSP = 'MSP';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProxyTypeAllowableValues()
    {
        return [
            self::PROXY_TYPE_PARTNER,
            self::PROXY_TYPE_MSP,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['proxy_type'] = isset($data['proxy_type']) ? $data['proxy_type'] : null;
        $this->container['operate_gateways'] = isset($data['operate_gateways']) ? $data['operate_gateways'] : null;
        $this->container['logical_id'] = isset($data['logical_id']) ? $data['logical_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_phone'] = isset($data['contact_phone']) ? $data['contact_phone'] : null;
        $this->container['contact_mobile'] = isset($data['contact_mobile']) ? $data['contact_mobile'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['street_address2'] = isset($data['street_address2']) ? $data['street_address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lon'] = isset($data['lon']) ? $data['lon'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProxyTypeAllowableValues();
        if (!in_array($this->container['proxy_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'proxy_type', must be one of '%s'",
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

        $allowedValues = $this->getProxyTypeAllowableValues();
        if (!in_array($this->container['proxy_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
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
     * Gets proxy_type
     *
     * @return string
     */
    public function getProxyType()
    {
        return $this->container['proxy_type'];
    }

    /**
     * Sets proxy_type
     *
     * @param string $proxy_type proxy_type
     *
     * @return $this
     */
    public function setProxyType($proxy_type)
    {
        $allowedValues = $this->getProxyTypeAllowableValues();
        if (!is_null($proxy_type) && !in_array($proxy_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'proxy_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['proxy_type'] = $proxy_type;

        return $this;
    }

    /**
     * Gets operate_gateways
     *
     * @return bool
     */
    public function getOperateGateways()
    {
        return $this->container['operate_gateways'];
    }

    /**
     * Sets operate_gateways
     *
     * @param bool $operate_gateways operate_gateways
     *
     * @return $this
     */
    public function setOperateGateways($operate_gateways)
    {
        $this->container['operate_gateways'] = $operate_gateways;

        return $this;
    }

    /**
     * Gets logical_id
     *
     * @return string
     */
    public function getLogicalId()
    {
        return $this->container['logical_id'];
    }

    /**
     * Sets logical_id
     *
     * @param string $logical_id logical_id
     *
     * @return $this
     */
    public function setLogicalId($logical_id)
    {
        $this->container['logical_id'] = $logical_id;

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
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix prefix
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

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
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name contact_name
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets contact_phone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    /**
     * Sets contact_phone
     *
     * @param string $contact_phone contact_phone
     *
     * @return $this
     */
    public function setContactPhone($contact_phone)
    {
        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    /**
     * Gets contact_mobile
     *
     * @return string
     */
    public function getContactMobile()
    {
        return $this->container['contact_mobile'];
    }

    /**
     * Sets contact_mobile
     *
     * @param string $contact_mobile contact_mobile
     *
     * @return $this
     */
    public function setContactMobile($contact_mobile)
    {
        $this->container['contact_mobile'] = $contact_mobile;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string $contact_email contact_email
     *
     * @return $this
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string $street_address street_address
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets street_address2
     *
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->container['street_address2'];
    }

    /**
     * Sets street_address2
     *
     * @param string $street_address2 street_address2
     *
     * @return $this
     */
    public function setStreetAddress2($street_address2)
    {
        $this->container['street_address2'] = $street_address2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param float $lat lat
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return float
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param float $lon lon
     *
     * @return $this
     */
    public function setLon($lon)
    {
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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


