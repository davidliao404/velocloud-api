<?php
/**
 * EnterpriseAlertTrigger
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
 * EnterpriseAlertTrigger Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseAlertTrigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_alert_trigger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'trigger_time' => '\DateTime',
        'enterprise_alert_configuration_id' => 'int',
        'enterprise_id' => 'int',
        'edge_id' => 'int',
        'edge_name' => 'string',
        'link_id' => 'int',
        'link_name' => 'string',
        'enterprise_object_id' => 'int',
        'enterprise_object_name' => 'string',
        'name' => 'string',
        'type' => 'string',
        'state' => 'string',
        'state_set_time' => '\DateTime',
        'last_contact' => '\DateTime',
        'first_notification_seconds' => 'int',
        'max_notifications' => 'int',
        'notification_interval_seconds' => 'int',
        'reset_interval_seconds' => 'int',
        'comment' => 'string',
        'next_notification_time' => '\DateTime',
        'remaining_notifications' => 'int',
        'timezone' => 'string',
        'locale' => 'string',
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
        'trigger_time' => 'date-time',
        'enterprise_alert_configuration_id' => null,
        'enterprise_id' => null,
        'edge_id' => null,
        'edge_name' => null,
        'link_id' => null,
        'link_name' => null,
        'enterprise_object_id' => null,
        'enterprise_object_name' => null,
        'name' => null,
        'type' => null,
        'state' => null,
        'state_set_time' => 'date-time',
        'last_contact' => 'date-time',
        'first_notification_seconds' => null,
        'max_notifications' => null,
        'notification_interval_seconds' => null,
        'reset_interval_seconds' => null,
        'comment' => null,
        'next_notification_time' => 'date-time',
        'remaining_notifications' => null,
        'timezone' => null,
        'locale' => null,
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
        'trigger_time' => 'triggerTime',
        'enterprise_alert_configuration_id' => 'enterpriseAlertConfigurationId',
        'enterprise_id' => 'enterpriseId',
        'edge_id' => 'edgeId',
        'edge_name' => 'edgeName',
        'link_id' => 'linkId',
        'link_name' => 'linkName',
        'enterprise_object_id' => 'enterpriseObjectId',
        'enterprise_object_name' => 'enterpriseObjectName',
        'name' => 'name',
        'type' => 'type',
        'state' => 'state',
        'state_set_time' => 'stateSetTime',
        'last_contact' => 'lastContact',
        'first_notification_seconds' => 'firstNotificationSeconds',
        'max_notifications' => 'maxNotifications',
        'notification_interval_seconds' => 'notificationIntervalSeconds',
        'reset_interval_seconds' => 'resetIntervalSeconds',
        'comment' => 'comment',
        'next_notification_time' => 'nextNotificationTime',
        'remaining_notifications' => 'remainingNotifications',
        'timezone' => 'timezone',
        'locale' => 'locale',
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
        'trigger_time' => 'setTriggerTime',
        'enterprise_alert_configuration_id' => 'setEnterpriseAlertConfigurationId',
        'enterprise_id' => 'setEnterpriseId',
        'edge_id' => 'setEdgeId',
        'edge_name' => 'setEdgeName',
        'link_id' => 'setLinkId',
        'link_name' => 'setLinkName',
        'enterprise_object_id' => 'setEnterpriseObjectId',
        'enterprise_object_name' => 'setEnterpriseObjectName',
        'name' => 'setName',
        'type' => 'setType',
        'state' => 'setState',
        'state_set_time' => 'setStateSetTime',
        'last_contact' => 'setLastContact',
        'first_notification_seconds' => 'setFirstNotificationSeconds',
        'max_notifications' => 'setMaxNotifications',
        'notification_interval_seconds' => 'setNotificationIntervalSeconds',
        'reset_interval_seconds' => 'setResetIntervalSeconds',
        'comment' => 'setComment',
        'next_notification_time' => 'setNextNotificationTime',
        'remaining_notifications' => 'setRemainingNotifications',
        'timezone' => 'setTimezone',
        'locale' => 'setLocale',
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
        'trigger_time' => 'getTriggerTime',
        'enterprise_alert_configuration_id' => 'getEnterpriseAlertConfigurationId',
        'enterprise_id' => 'getEnterpriseId',
        'edge_id' => 'getEdgeId',
        'edge_name' => 'getEdgeName',
        'link_id' => 'getLinkId',
        'link_name' => 'getLinkName',
        'enterprise_object_id' => 'getEnterpriseObjectId',
        'enterprise_object_name' => 'getEnterpriseObjectName',
        'name' => 'getName',
        'type' => 'getType',
        'state' => 'getState',
        'state_set_time' => 'getStateSetTime',
        'last_contact' => 'getLastContact',
        'first_notification_seconds' => 'getFirstNotificationSeconds',
        'max_notifications' => 'getMaxNotifications',
        'notification_interval_seconds' => 'getNotificationIntervalSeconds',
        'reset_interval_seconds' => 'getResetIntervalSeconds',
        'comment' => 'getComment',
        'next_notification_time' => 'getNextNotificationTime',
        'remaining_notifications' => 'getRemainingNotifications',
        'timezone' => 'getTimezone',
        'locale' => 'getLocale',
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

    const NAME_EDGE_DOWN = 'EDGE_DOWN';
    const NAME_EDGE_UP = 'EDGE_UP';
    const NAME_LINK_DOWN = 'LINK_DOWN';
    const NAME_LINK_UP = 'LINK_UP';
    const NAME_VPN_TUNNEL_DOWN = 'VPN_TUNNEL_DOWN';
    const NAME_EDGE_HA_FAILOVER = 'EDGE_HA_FAILOVER';
    const NAME_EDGE_SERVICE_DOWN = 'EDGE_SERVICE_DOWN';
    const NAME_GATEWAY_SERVICE_DOWN = 'GATEWAY_SERVICE_DOWN';
    const NAME_VNF_VM_EVENT = 'VNF_VM_EVENT';
    const NAME_VNF_VM_DEPLOYED = 'VNF_VM_DEPLOYED';
    const NAME_VNF_VM_POWERED_ON = 'VNF_VM_POWERED_ON';
    const NAME_VNF_VM_POWERED_OFF = 'VNF_VM_POWERED_OFF';
    const NAME_VNF_VM_DELETED = 'VNF_VM_DELETED';
    const NAME_VNF_VM_ERROR = 'VNF_VM_ERROR';
    const NAME_VNF_INSERTION_EVENT = 'VNF_INSERTION_EVENT';
    const NAME_VNF_INSERTION_ENABLED = 'VNF_INSERTION_ENABLED';
    const NAME_VNF_INSERTION_DISABLED = 'VNF_INSERTION_DISABLED';
    const NAME_TEST_ALERT = 'TEST_ALERT';
    const TYPE_EDGE_DOWN = 'EDGE_DOWN';
    const TYPE_EDGE_UP = 'EDGE_UP';
    const TYPE_LINK_DOWN = 'LINK_DOWN';
    const TYPE_LINK_UP = 'LINK_UP';
    const TYPE_VPN_TUNNEL_DOWN = 'VPN_TUNNEL_DOWN';
    const TYPE_EDGE_HA_FAILOVER = 'EDGE_HA_FAILOVER';
    const TYPE_EDGE_SERVICE_DOWN = 'EDGE_SERVICE_DOWN';
    const TYPE_GATEWAY_SERVICE_DOWN = 'GATEWAY_SERVICE_DOWN';
    const TYPE_VNF_VM_EVENT = 'VNF_VM_EVENT';
    const TYPE_VNF_VM_DEPLOYED = 'VNF_VM_DEPLOYED';
    const TYPE_VNF_VM_POWERED_ON = 'VNF_VM_POWERED_ON';
    const TYPE_VNF_VM_POWERED_OFF = 'VNF_VM_POWERED_OFF';
    const TYPE_VNF_VM_DELETED = 'VNF_VM_DELETED';
    const TYPE_VNF_VM_ERROR = 'VNF_VM_ERROR';
    const TYPE_VNF_INSERTION_EVENT = 'VNF_INSERTION_EVENT';
    const TYPE_VNF_INSERTION_ENABLED = 'VNF_INSERTION_ENABLED';
    const TYPE_VNF_INSERTION_DISABLED = 'VNF_INSERTION_DISABLED';
    const TYPE_TEST_ALERT = 'TEST_ALERT';
    const STATE_PENDING = 'PENDING';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_CLOSED = 'CLOSED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_EDGE_DOWN,
            self::NAME_EDGE_UP,
            self::NAME_LINK_DOWN,
            self::NAME_LINK_UP,
            self::NAME_VPN_TUNNEL_DOWN,
            self::NAME_EDGE_HA_FAILOVER,
            self::NAME_EDGE_SERVICE_DOWN,
            self::NAME_GATEWAY_SERVICE_DOWN,
            self::NAME_VNF_VM_EVENT,
            self::NAME_VNF_VM_DEPLOYED,
            self::NAME_VNF_VM_POWERED_ON,
            self::NAME_VNF_VM_POWERED_OFF,
            self::NAME_VNF_VM_DELETED,
            self::NAME_VNF_VM_ERROR,
            self::NAME_VNF_INSERTION_EVENT,
            self::NAME_VNF_INSERTION_ENABLED,
            self::NAME_VNF_INSERTION_DISABLED,
            self::NAME_TEST_ALERT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EDGE_DOWN,
            self::TYPE_EDGE_UP,
            self::TYPE_LINK_DOWN,
            self::TYPE_LINK_UP,
            self::TYPE_VPN_TUNNEL_DOWN,
            self::TYPE_EDGE_HA_FAILOVER,
            self::TYPE_EDGE_SERVICE_DOWN,
            self::TYPE_GATEWAY_SERVICE_DOWN,
            self::TYPE_VNF_VM_EVENT,
            self::TYPE_VNF_VM_DEPLOYED,
            self::TYPE_VNF_VM_POWERED_ON,
            self::TYPE_VNF_VM_POWERED_OFF,
            self::TYPE_VNF_VM_DELETED,
            self::TYPE_VNF_VM_ERROR,
            self::TYPE_VNF_INSERTION_EVENT,
            self::TYPE_VNF_INSERTION_ENABLED,
            self::TYPE_VNF_INSERTION_DISABLED,
            self::TYPE_TEST_ALERT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_ACTIVE,
            self::STATE_CLOSED,
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
        $this->container['trigger_time'] = isset($data['trigger_time']) ? $data['trigger_time'] : null;
        $this->container['enterprise_alert_configuration_id'] = isset($data['enterprise_alert_configuration_id']) ? $data['enterprise_alert_configuration_id'] : null;
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['edge_id'] = isset($data['edge_id']) ? $data['edge_id'] : null;
        $this->container['edge_name'] = isset($data['edge_name']) ? $data['edge_name'] : null;
        $this->container['link_id'] = isset($data['link_id']) ? $data['link_id'] : null;
        $this->container['link_name'] = isset($data['link_name']) ? $data['link_name'] : null;
        $this->container['enterprise_object_id'] = isset($data['enterprise_object_id']) ? $data['enterprise_object_id'] : null;
        $this->container['enterprise_object_name'] = isset($data['enterprise_object_name']) ? $data['enterprise_object_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['state_set_time'] = isset($data['state_set_time']) ? $data['state_set_time'] : null;
        $this->container['last_contact'] = isset($data['last_contact']) ? $data['last_contact'] : null;
        $this->container['first_notification_seconds'] = isset($data['first_notification_seconds']) ? $data['first_notification_seconds'] : null;
        $this->container['max_notifications'] = isset($data['max_notifications']) ? $data['max_notifications'] : null;
        $this->container['notification_interval_seconds'] = isset($data['notification_interval_seconds']) ? $data['notification_interval_seconds'] : null;
        $this->container['reset_interval_seconds'] = isset($data['reset_interval_seconds']) ? $data['reset_interval_seconds'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['next_notification_time'] = isset($data['next_notification_time']) ? $data['next_notification_time'] : null;
        $this->container['remaining_notifications'] = isset($data['remaining_notifications']) ? $data['remaining_notifications'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
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

        $allowedValues = $this->getNameAllowableValues();
        if (!in_array($this->container['name'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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

        $allowedValues = $this->getNameAllowableValues();
        if (!in_array($this->container['name'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
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
     * Gets trigger_time
     *
     * @return \DateTime
     */
    public function getTriggerTime()
    {
        return $this->container['trigger_time'];
    }

    /**
     * Sets trigger_time
     *
     * @param \DateTime $trigger_time trigger_time
     *
     * @return $this
     */
    public function setTriggerTime($trigger_time)
    {
        $this->container['trigger_time'] = $trigger_time;

        return $this;
    }

    /**
     * Gets enterprise_alert_configuration_id
     *
     * @return int
     */
    public function getEnterpriseAlertConfigurationId()
    {
        return $this->container['enterprise_alert_configuration_id'];
    }

    /**
     * Sets enterprise_alert_configuration_id
     *
     * @param int $enterprise_alert_configuration_id enterprise_alert_configuration_id
     *
     * @return $this
     */
    public function setEnterpriseAlertConfigurationId($enterprise_alert_configuration_id)
    {
        $this->container['enterprise_alert_configuration_id'] = $enterprise_alert_configuration_id;

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
     * Gets link_name
     *
     * @return string
     */
    public function getLinkName()
    {
        return $this->container['link_name'];
    }

    /**
     * Sets link_name
     *
     * @param string $link_name link_name
     *
     * @return $this
     */
    public function setLinkName($link_name)
    {
        $this->container['link_name'] = $link_name;

        return $this;
    }

    /**
     * Gets enterprise_object_id
     *
     * @return int
     */
    public function getEnterpriseObjectId()
    {
        return $this->container['enterprise_object_id'];
    }

    /**
     * Sets enterprise_object_id
     *
     * @param int $enterprise_object_id enterprise_object_id
     *
     * @return $this
     */
    public function setEnterpriseObjectId($enterprise_object_id)
    {
        $this->container['enterprise_object_id'] = $enterprise_object_id;

        return $this;
    }

    /**
     * Gets enterprise_object_name
     *
     * @return string
     */
    public function getEnterpriseObjectName()
    {
        return $this->container['enterprise_object_name'];
    }

    /**
     * Sets enterprise_object_name
     *
     * @param string $enterprise_object_name enterprise_object_name
     *
     * @return $this
     */
    public function setEnterpriseObjectName($enterprise_object_name)
    {
        $this->container['enterprise_object_name'] = $enterprise_object_name;

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
        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($name) && !in_array($name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_set_time
     *
     * @return \DateTime
     */
    public function getStateSetTime()
    {
        return $this->container['state_set_time'];
    }

    /**
     * Sets state_set_time
     *
     * @param \DateTime $state_set_time state_set_time
     *
     * @return $this
     */
    public function setStateSetTime($state_set_time)
    {
        $this->container['state_set_time'] = $state_set_time;

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
     * Gets first_notification_seconds
     *
     * @return int
     */
    public function getFirstNotificationSeconds()
    {
        return $this->container['first_notification_seconds'];
    }

    /**
     * Sets first_notification_seconds
     *
     * @param int $first_notification_seconds first_notification_seconds
     *
     * @return $this
     */
    public function setFirstNotificationSeconds($first_notification_seconds)
    {
        $this->container['first_notification_seconds'] = $first_notification_seconds;

        return $this;
    }

    /**
     * Gets max_notifications
     *
     * @return int
     */
    public function getMaxNotifications()
    {
        return $this->container['max_notifications'];
    }

    /**
     * Sets max_notifications
     *
     * @param int $max_notifications max_notifications
     *
     * @return $this
     */
    public function setMaxNotifications($max_notifications)
    {
        $this->container['max_notifications'] = $max_notifications;

        return $this;
    }

    /**
     * Gets notification_interval_seconds
     *
     * @return int
     */
    public function getNotificationIntervalSeconds()
    {
        return $this->container['notification_interval_seconds'];
    }

    /**
     * Sets notification_interval_seconds
     *
     * @param int $notification_interval_seconds notification_interval_seconds
     *
     * @return $this
     */
    public function setNotificationIntervalSeconds($notification_interval_seconds)
    {
        $this->container['notification_interval_seconds'] = $notification_interval_seconds;

        return $this;
    }

    /**
     * Gets reset_interval_seconds
     *
     * @return int
     */
    public function getResetIntervalSeconds()
    {
        return $this->container['reset_interval_seconds'];
    }

    /**
     * Sets reset_interval_seconds
     *
     * @param int $reset_interval_seconds reset_interval_seconds
     *
     * @return $this
     */
    public function setResetIntervalSeconds($reset_interval_seconds)
    {
        $this->container['reset_interval_seconds'] = $reset_interval_seconds;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets next_notification_time
     *
     * @return \DateTime
     */
    public function getNextNotificationTime()
    {
        return $this->container['next_notification_time'];
    }

    /**
     * Sets next_notification_time
     *
     * @param \DateTime $next_notification_time next_notification_time
     *
     * @return $this
     */
    public function setNextNotificationTime($next_notification_time)
    {
        $this->container['next_notification_time'] = $next_notification_time;

        return $this;
    }

    /**
     * Gets remaining_notifications
     *
     * @return int
     */
    public function getRemainingNotifications()
    {
        return $this->container['remaining_notifications'];
    }

    /**
     * Sets remaining_notifications
     *
     * @param int $remaining_notifications remaining_notifications
     *
     * @return $this
     */
    public function setRemainingNotifications($remaining_notifications)
    {
        $this->container['remaining_notifications'] = $remaining_notifications;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

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


