<?php
/**
 * MonitoringGetEnterpriseEdgeLinkStatusResultItem
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
 * MonitoringGetEnterpriseEdgeLinkStatusResultItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MonitoringGetEnterpriseEdgeLinkStatusResultItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'monitoring_get_enterprise_edge_link_status_result_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'edge_id' => 'int',
        'edge_last_contact' => '\DateTime',
        'edge_model_number' => 'string',
        'edge_name' => 'string',
        'edge_service_up_since' => '\DateTime',
        'edge_state' => 'string',
        'edge_system_up_since' => '\DateTime',
        'enterprise_id' => 'int',
        'enterprise_name' => 'string',
        'interface' => 'string',
        'isp' => 'string',
        'link_id' => 'int',
        'link_last_active' => '\DateTime',
        'link_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'edge_id' => null,
        'edge_last_contact' => 'date-time',
        'edge_model_number' => null,
        'edge_name' => null,
        'edge_service_up_since' => 'date-time',
        'edge_state' => null,
        'edge_system_up_since' => 'date-time',
        'enterprise_id' => null,
        'enterprise_name' => null,
        'interface' => null,
        'isp' => null,
        'link_id' => null,
        'link_last_active' => 'date-time',
        'link_state' => null
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
        'edge_last_contact' => 'edgeLastContact',
        'edge_model_number' => 'edgeModelNumber',
        'edge_name' => 'edgeName',
        'edge_service_up_since' => 'edgeServiceUpSince',
        'edge_state' => 'edgeState',
        'edge_system_up_since' => 'edgeSystemUpSince',
        'enterprise_id' => 'enterpriseId',
        'enterprise_name' => 'enterpriseName',
        'interface' => 'interface',
        'isp' => 'isp',
        'link_id' => 'linkId',
        'link_last_active' => 'linkLastActive',
        'link_state' => 'linkState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'edge_id' => 'setEdgeId',
        'edge_last_contact' => 'setEdgeLastContact',
        'edge_model_number' => 'setEdgeModelNumber',
        'edge_name' => 'setEdgeName',
        'edge_service_up_since' => 'setEdgeServiceUpSince',
        'edge_state' => 'setEdgeState',
        'edge_system_up_since' => 'setEdgeSystemUpSince',
        'enterprise_id' => 'setEnterpriseId',
        'enterprise_name' => 'setEnterpriseName',
        'interface' => 'setInterface',
        'isp' => 'setIsp',
        'link_id' => 'setLinkId',
        'link_last_active' => 'setLinkLastActive',
        'link_state' => 'setLinkState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'edge_id' => 'getEdgeId',
        'edge_last_contact' => 'getEdgeLastContact',
        'edge_model_number' => 'getEdgeModelNumber',
        'edge_name' => 'getEdgeName',
        'edge_service_up_since' => 'getEdgeServiceUpSince',
        'edge_state' => 'getEdgeState',
        'edge_system_up_since' => 'getEdgeSystemUpSince',
        'enterprise_id' => 'getEnterpriseId',
        'enterprise_name' => 'getEnterpriseName',
        'interface' => 'getInterface',
        'isp' => 'getIsp',
        'link_id' => 'getLinkId',
        'link_last_active' => 'getLinkLastActive',
        'link_state' => 'getLinkState'
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

    const EDGE_STATE_NEVER_ACTIVATED = 'NEVER_ACTIVATED';
    const EDGE_STATE_DEGRADED = 'DEGRADED';
    const EDGE_STATE_OFFLINE = 'OFFLINE';
    const EDGE_STATE_DISABLED = 'DISABLED';
    const EDGE_STATE_EXPIRED = 'EXPIRED';
    const EDGE_STATE_CONNECTED = 'CONNECTED';
    const LINK_STATE_UNKNOWN = 'UNKNOWN';
    const LINK_STATE_STABLE = 'STABLE';
    const LINK_STATE_UNSTABLE = 'UNSTABLE';
    const LINK_STATE_DISCONNECTED = 'DISCONNECTED';
    const LINK_STATE_QUIET = 'QUIET';
    const LINK_STATE_INITIAL = 'INITIAL';
    const LINK_STATE_STANDBY = 'STANDBY';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEdgeStateAllowableValues()
    {
        return [
            self::EDGE_STATE_NEVER_ACTIVATED,
            self::EDGE_STATE_DEGRADED,
            self::EDGE_STATE_OFFLINE,
            self::EDGE_STATE_DISABLED,
            self::EDGE_STATE_EXPIRED,
            self::EDGE_STATE_CONNECTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLinkStateAllowableValues()
    {
        return [
            self::LINK_STATE_UNKNOWN,
            self::LINK_STATE_STABLE,
            self::LINK_STATE_UNSTABLE,
            self::LINK_STATE_DISCONNECTED,
            self::LINK_STATE_QUIET,
            self::LINK_STATE_INITIAL,
            self::LINK_STATE_STANDBY,
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
        $this->container['edge_id'] = isset($data['edge_id']) ? $data['edge_id'] : null;
        $this->container['edge_last_contact'] = isset($data['edge_last_contact']) ? $data['edge_last_contact'] : null;
        $this->container['edge_model_number'] = isset($data['edge_model_number']) ? $data['edge_model_number'] : null;
        $this->container['edge_name'] = isset($data['edge_name']) ? $data['edge_name'] : null;
        $this->container['edge_service_up_since'] = isset($data['edge_service_up_since']) ? $data['edge_service_up_since'] : null;
        $this->container['edge_state'] = isset($data['edge_state']) ? $data['edge_state'] : null;
        $this->container['edge_system_up_since'] = isset($data['edge_system_up_since']) ? $data['edge_system_up_since'] : null;
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['enterprise_name'] = isset($data['enterprise_name']) ? $data['enterprise_name'] : null;
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['link_id'] = isset($data['link_id']) ? $data['link_id'] : null;
        $this->container['link_last_active'] = isset($data['link_last_active']) ? $data['link_last_active'] : null;
        $this->container['link_state'] = isset($data['link_state']) ? $data['link_state'] : null;
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
        if ($this->container['edge_last_contact'] === null) {
            $invalidProperties[] = "'edge_last_contact' can't be null";
        }
        if ($this->container['edge_model_number'] === null) {
            $invalidProperties[] = "'edge_model_number' can't be null";
        }
        if ($this->container['edge_name'] === null) {
            $invalidProperties[] = "'edge_name' can't be null";
        }
        if ($this->container['edge_service_up_since'] === null) {
            $invalidProperties[] = "'edge_service_up_since' can't be null";
        }
        if ($this->container['edge_state'] === null) {
            $invalidProperties[] = "'edge_state' can't be null";
        }
        $allowedValues = $this->getEdgeStateAllowableValues();
        if (!in_array($this->container['edge_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'edge_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['edge_system_up_since'] === null) {
            $invalidProperties[] = "'edge_system_up_since' can't be null";
        }
        if ($this->container['enterprise_id'] === null) {
            $invalidProperties[] = "'enterprise_id' can't be null";
        }
        if ($this->container['enterprise_name'] === null) {
            $invalidProperties[] = "'enterprise_name' can't be null";
        }
        if ($this->container['interface'] === null) {
            $invalidProperties[] = "'interface' can't be null";
        }
        if ($this->container['isp'] === null) {
            $invalidProperties[] = "'isp' can't be null";
        }
        if ($this->container['link_id'] === null) {
            $invalidProperties[] = "'link_id' can't be null";
        }
        if ($this->container['link_last_active'] === null) {
            $invalidProperties[] = "'link_last_active' can't be null";
        }
        if ($this->container['link_state'] === null) {
            $invalidProperties[] = "'link_state' can't be null";
        }
        $allowedValues = $this->getLinkStateAllowableValues();
        if (!in_array($this->container['link_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'link_state', must be one of '%s'",
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

        if ($this->container['edge_id'] === null) {
            return false;
        }
        if ($this->container['edge_last_contact'] === null) {
            return false;
        }
        if ($this->container['edge_model_number'] === null) {
            return false;
        }
        if ($this->container['edge_name'] === null) {
            return false;
        }
        if ($this->container['edge_service_up_since'] === null) {
            return false;
        }
        if ($this->container['edge_state'] === null) {
            return false;
        }
        $allowedValues = $this->getEdgeStateAllowableValues();
        if (!in_array($this->container['edge_state'], $allowedValues)) {
            return false;
        }
        if ($this->container['edge_system_up_since'] === null) {
            return false;
        }
        if ($this->container['enterprise_id'] === null) {
            return false;
        }
        if ($this->container['enterprise_name'] === null) {
            return false;
        }
        if ($this->container['interface'] === null) {
            return false;
        }
        if ($this->container['isp'] === null) {
            return false;
        }
        if ($this->container['link_id'] === null) {
            return false;
        }
        if ($this->container['link_last_active'] === null) {
            return false;
        }
        if ($this->container['link_state'] === null) {
            return false;
        }
        $allowedValues = $this->getLinkStateAllowableValues();
        if (!in_array($this->container['link_state'], $allowedValues)) {
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
     * Gets edge_last_contact
     *
     * @return \DateTime
     */
    public function getEdgeLastContact()
    {
        return $this->container['edge_last_contact'];
    }

    /**
     * Sets edge_last_contact
     *
     * @param \DateTime $edge_last_contact edge_last_contact
     *
     * @return $this
     */
    public function setEdgeLastContact($edge_last_contact)
    {
        $this->container['edge_last_contact'] = $edge_last_contact;

        return $this;
    }

    /**
     * Gets edge_model_number
     *
     * @return string
     */
    public function getEdgeModelNumber()
    {
        return $this->container['edge_model_number'];
    }

    /**
     * Sets edge_model_number
     *
     * @param string $edge_model_number edge_model_number
     *
     * @return $this
     */
    public function setEdgeModelNumber($edge_model_number)
    {
        $this->container['edge_model_number'] = $edge_model_number;

        return $this;
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
     * Gets edge_service_up_since
     *
     * @return \DateTime
     */
    public function getEdgeServiceUpSince()
    {
        return $this->container['edge_service_up_since'];
    }

    /**
     * Sets edge_service_up_since
     *
     * @param \DateTime $edge_service_up_since edge_service_up_since
     *
     * @return $this
     */
    public function setEdgeServiceUpSince($edge_service_up_since)
    {
        $this->container['edge_service_up_since'] = $edge_service_up_since;

        return $this;
    }

    /**
     * Gets edge_state
     *
     * @return string
     */
    public function getEdgeState()
    {
        return $this->container['edge_state'];
    }

    /**
     * Sets edge_state
     *
     * @param string $edge_state edge_state
     *
     * @return $this
     */
    public function setEdgeState($edge_state)
    {
        $allowedValues = $this->getEdgeStateAllowableValues();
        if (!in_array($edge_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'edge_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['edge_state'] = $edge_state;

        return $this;
    }

    /**
     * Gets edge_system_up_since
     *
     * @return \DateTime
     */
    public function getEdgeSystemUpSince()
    {
        return $this->container['edge_system_up_since'];
    }

    /**
     * Sets edge_system_up_since
     *
     * @param \DateTime $edge_system_up_since edge_system_up_since
     *
     * @return $this
     */
    public function setEdgeSystemUpSince($edge_system_up_since)
    {
        $this->container['edge_system_up_since'] = $edge_system_up_since;

        return $this;
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
     * Gets enterprise_name
     *
     * @return string
     */
    public function getEnterpriseName()
    {
        return $this->container['enterprise_name'];
    }

    /**
     * Sets enterprise_name
     *
     * @param string $enterprise_name enterprise_name
     *
     * @return $this
     */
    public function setEnterpriseName($enterprise_name)
    {
        $this->container['enterprise_name'] = $enterprise_name;

        return $this;
    }

    /**
     * Gets interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface
     *
     * @param string $interface interface
     *
     * @return $this
     */
    public function setInterface($interface)
    {
        $this->container['interface'] = $interface;

        return $this;
    }

    /**
     * Gets isp
     *
     * @return string
     */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
     * Sets isp
     *
     * @param string $isp isp
     *
     * @return $this
     */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;

        return $this;
    }

    /**
     * Gets link_id
     *
     * @return int
     */
    public function getLinkId()
    {
        return $this->container['link_id'];
    }

    /**
     * Sets link_id
     *
     * @param int $link_id link_id
     *
     * @return $this
     */
    public function setLinkId($link_id)
    {
        $this->container['link_id'] = $link_id;

        return $this;
    }

    /**
     * Gets link_last_active
     *
     * @return \DateTime
     */
    public function getLinkLastActive()
    {
        return $this->container['link_last_active'];
    }

    /**
     * Sets link_last_active
     *
     * @param \DateTime $link_last_active link_last_active
     *
     * @return $this
     */
    public function setLinkLastActive($link_last_active)
    {
        $this->container['link_last_active'] = $link_last_active;

        return $this;
    }

    /**
     * Gets link_state
     *
     * @return string
     */
    public function getLinkState()
    {
        return $this->container['link_state'];
    }

    /**
     * Sets link_state
     *
     * @param string $link_state link_state
     *
     * @return $this
     */
    public function setLinkState($link_state)
    {
        $allowedValues = $this->getLinkStateAllowableValues();
        if (!in_array($link_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'link_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['link_state'] = $link_state;

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


