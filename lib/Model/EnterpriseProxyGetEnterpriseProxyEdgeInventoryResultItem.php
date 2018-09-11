<?php
/**
 * EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem
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
 * EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_proxy_get_enterprise_proxy_edge_inventory_result_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enterprise_name' => 'string',
        'enterprise_id' => 'int',
        'edge_name' => 'string',
        'edge_id' => 'int',
        'created' => '\DateTime',
        'edge_state' => 'string',
        'serial_number' => 'string',
        'ha_serial_number' => 'string',
        'activation_state' => 'string',
        'activation_time' => '\DateTime',
        'model_number' => 'string',
        'software_version' => 'string',
        'software_updated' => '\DateTime',
        'last_contact' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enterprise_name' => null,
        'enterprise_id' => null,
        'edge_name' => null,
        'edge_id' => null,
        'created' => 'date-time',
        'edge_state' => null,
        'serial_number' => null,
        'ha_serial_number' => null,
        'activation_state' => null,
        'activation_time' => 'date-time',
        'model_number' => null,
        'software_version' => null,
        'software_updated' => 'date-time',
        'last_contact' => 'date-time'
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
        'enterprise_name' => 'enterpriseName',
        'enterprise_id' => 'enterpriseId',
        'edge_name' => 'edgeName',
        'edge_id' => 'edgeId',
        'created' => 'created',
        'edge_state' => 'edgeState',
        'serial_number' => 'serialNumber',
        'ha_serial_number' => 'haSerialNumber',
        'activation_state' => 'activationState',
        'activation_time' => 'activationTime',
        'model_number' => 'modelNumber',
        'software_version' => 'softwareVersion',
        'software_updated' => 'softwareUpdated',
        'last_contact' => 'lastContact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enterprise_name' => 'setEnterpriseName',
        'enterprise_id' => 'setEnterpriseId',
        'edge_name' => 'setEdgeName',
        'edge_id' => 'setEdgeId',
        'created' => 'setCreated',
        'edge_state' => 'setEdgeState',
        'serial_number' => 'setSerialNumber',
        'ha_serial_number' => 'setHaSerialNumber',
        'activation_state' => 'setActivationState',
        'activation_time' => 'setActivationTime',
        'model_number' => 'setModelNumber',
        'software_version' => 'setSoftwareVersion',
        'software_updated' => 'setSoftwareUpdated',
        'last_contact' => 'setLastContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enterprise_name' => 'getEnterpriseName',
        'enterprise_id' => 'getEnterpriseId',
        'edge_name' => 'getEdgeName',
        'edge_id' => 'getEdgeId',
        'created' => 'getCreated',
        'edge_state' => 'getEdgeState',
        'serial_number' => 'getSerialNumber',
        'ha_serial_number' => 'getHaSerialNumber',
        'activation_state' => 'getActivationState',
        'activation_time' => 'getActivationTime',
        'model_number' => 'getModelNumber',
        'software_version' => 'getSoftwareVersion',
        'software_updated' => 'getSoftwareUpdated',
        'last_contact' => 'getLastContact'
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
    const ACTIVATION_STATE_UNASSIGNED = 'UNASSIGNED';
    const ACTIVATION_STATE_PENDING = 'PENDING';
    const ACTIVATION_STATE_ACTIVATED = 'ACTIVATED';
    const ACTIVATION_STATE_REACTIVATION_PENDING = 'REACTIVATION_PENDING';
    

    
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
    public function getActivationStateAllowableValues()
    {
        return [
            self::ACTIVATION_STATE_UNASSIGNED,
            self::ACTIVATION_STATE_PENDING,
            self::ACTIVATION_STATE_ACTIVATED,
            self::ACTIVATION_STATE_REACTIVATION_PENDING,
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
        $this->container['enterprise_name'] = isset($data['enterprise_name']) ? $data['enterprise_name'] : null;
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['edge_name'] = isset($data['edge_name']) ? $data['edge_name'] : null;
        $this->container['edge_id'] = isset($data['edge_id']) ? $data['edge_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['edge_state'] = isset($data['edge_state']) ? $data['edge_state'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['ha_serial_number'] = isset($data['ha_serial_number']) ? $data['ha_serial_number'] : null;
        $this->container['activation_state'] = isset($data['activation_state']) ? $data['activation_state'] : null;
        $this->container['activation_time'] = isset($data['activation_time']) ? $data['activation_time'] : null;
        $this->container['model_number'] = isset($data['model_number']) ? $data['model_number'] : null;
        $this->container['software_version'] = isset($data['software_version']) ? $data['software_version'] : null;
        $this->container['software_updated'] = isset($data['software_updated']) ? $data['software_updated'] : null;
        $this->container['last_contact'] = isset($data['last_contact']) ? $data['last_contact'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['enterprise_name'] === null) {
            $invalidProperties[] = "'enterprise_name' can't be null";
        }
        if ($this->container['enterprise_id'] === null) {
            $invalidProperties[] = "'enterprise_id' can't be null";
        }
        if ($this->container['edge_name'] === null) {
            $invalidProperties[] = "'edge_name' can't be null";
        }
        if ($this->container['edge_id'] === null) {
            $invalidProperties[] = "'edge_id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
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

        if ($this->container['serial_number'] === null) {
            $invalidProperties[] = "'serial_number' can't be null";
        }
        if ($this->container['ha_serial_number'] === null) {
            $invalidProperties[] = "'ha_serial_number' can't be null";
        }
        if ($this->container['activation_state'] === null) {
            $invalidProperties[] = "'activation_state' can't be null";
        }
        $allowedValues = $this->getActivationStateAllowableValues();
        if (!in_array($this->container['activation_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activation_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['activation_time'] === null) {
            $invalidProperties[] = "'activation_time' can't be null";
        }
        if ($this->container['model_number'] === null) {
            $invalidProperties[] = "'model_number' can't be null";
        }
        if ($this->container['software_version'] === null) {
            $invalidProperties[] = "'software_version' can't be null";
        }
        if ($this->container['software_updated'] === null) {
            $invalidProperties[] = "'software_updated' can't be null";
        }
        if ($this->container['last_contact'] === null) {
            $invalidProperties[] = "'last_contact' can't be null";
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

        if ($this->container['enterprise_name'] === null) {
            return false;
        }
        if ($this->container['enterprise_id'] === null) {
            return false;
        }
        if ($this->container['edge_name'] === null) {
            return false;
        }
        if ($this->container['edge_id'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['edge_state'] === null) {
            return false;
        }
        $allowedValues = $this->getEdgeStateAllowableValues();
        if (!in_array($this->container['edge_state'], $allowedValues)) {
            return false;
        }
        if ($this->container['serial_number'] === null) {
            return false;
        }
        if ($this->container['ha_serial_number'] === null) {
            return false;
        }
        if ($this->container['activation_state'] === null) {
            return false;
        }
        $allowedValues = $this->getActivationStateAllowableValues();
        if (!in_array($this->container['activation_state'], $allowedValues)) {
            return false;
        }
        if ($this->container['activation_time'] === null) {
            return false;
        }
        if ($this->container['model_number'] === null) {
            return false;
        }
        if ($this->container['software_version'] === null) {
            return false;
        }
        if ($this->container['software_updated'] === null) {
            return false;
        }
        if ($this->container['last_contact'] === null) {
            return false;
        }
        return true;
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
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets ha_serial_number
     *
     * @return string
     */
    public function getHaSerialNumber()
    {
        return $this->container['ha_serial_number'];
    }

    /**
     * Sets ha_serial_number
     *
     * @param string $ha_serial_number ha_serial_number
     *
     * @return $this
     */
    public function setHaSerialNumber($ha_serial_number)
    {
        $this->container['ha_serial_number'] = $ha_serial_number;

        return $this;
    }

    /**
     * Gets activation_state
     *
     * @return string
     */
    public function getActivationState()
    {
        return $this->container['activation_state'];
    }

    /**
     * Sets activation_state
     *
     * @param string $activation_state activation_state
     *
     * @return $this
     */
    public function setActivationState($activation_state)
    {
        $allowedValues = $this->getActivationStateAllowableValues();
        if (!in_array($activation_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activation_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activation_state'] = $activation_state;

        return $this;
    }

    /**
     * Gets activation_time
     *
     * @return \DateTime
     */
    public function getActivationTime()
    {
        return $this->container['activation_time'];
    }

    /**
     * Sets activation_time
     *
     * @param \DateTime $activation_time activation_time
     *
     * @return $this
     */
    public function setActivationTime($activation_time)
    {
        $this->container['activation_time'] = $activation_time;

        return $this;
    }

    /**
     * Gets model_number
     *
     * @return string
     */
    public function getModelNumber()
    {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number
     *
     * @param string $model_number model_number
     *
     * @return $this
     */
    public function setModelNumber($model_number)
    {
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets software_version
     *
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->container['software_version'];
    }

    /**
     * Sets software_version
     *
     * @param string $software_version software_version
     *
     * @return $this
     */
    public function setSoftwareVersion($software_version)
    {
        $this->container['software_version'] = $software_version;

        return $this;
    }

    /**
     * Gets software_updated
     *
     * @return \DateTime
     */
    public function getSoftwareUpdated()
    {
        return $this->container['software_updated'];
    }

    /**
     * Sets software_updated
     *
     * @param \DateTime $software_updated software_updated
     *
     * @return $this
     */
    public function setSoftwareUpdated($software_updated)
    {
        $this->container['software_updated'] = $software_updated;

        return $this;
    }

    /**
     * Gets last_contact
     *
     * @return \DateTime
     */
    public function getLastContact()
    {
        return $this->container['last_contact'];
    }

    /**
     * Sets last_contact
     *
     * @param \DateTime $last_contact last_contact
     *
     * @return $this
     */
    public function setLastContact($last_contact)
    {
        $this->container['last_contact'] = $last_contact;

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


