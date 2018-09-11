<?php
/**
 * DisasterRecoveryGetReplicationStatusResult
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
 * DisasterRecoveryGetReplicationStatusResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisasterRecoveryGetReplicationStatusResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'disaster_recovery_get_replication_status_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active_address' => 'string',
        'active_replication_address' => 'string',
        'client_contact' => '\Swagger\Client\Model\DisasterRecoveryClientContact[]',
        'client_count' => '\Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultClientCount',
        'dr_state' => 'string',
        'dr_vco_user' => 'string',
        'failure_description' => 'string',
        'last_dr_protected_time' => '\DateTime',
        'role' => 'string',
        'role_timestamp' => '\DateTime',
        'standby_list' => '\Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultStandbyList[]',
        'state_history' => '\Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultStateHistory[]',
        'state_timestamp' => '\DateTime',
        'vco_ip' => 'string',
        'vco_replication_ip' => 'string',
        'vco_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active_address' => null,
        'active_replication_address' => null,
        'client_contact' => null,
        'client_count' => null,
        'dr_state' => null,
        'dr_vco_user' => null,
        'failure_description' => null,
        'last_dr_protected_time' => 'date-time',
        'role' => null,
        'role_timestamp' => 'date-time',
        'standby_list' => null,
        'state_history' => null,
        'state_timestamp' => 'date-time',
        'vco_ip' => null,
        'vco_replication_ip' => null,
        'vco_uuid' => null
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
        'active_address' => 'activeAddress',
        'active_replication_address' => 'activeReplicationAddress',
        'client_contact' => 'clientContact',
        'client_count' => 'clientCount',
        'dr_state' => 'drState',
        'dr_vco_user' => 'drVCOUser',
        'failure_description' => 'failureDescription',
        'last_dr_protected_time' => 'lastDrProtectedTime',
        'role' => 'role',
        'role_timestamp' => 'roleTimestamp',
        'standby_list' => 'standbyList',
        'state_history' => 'stateHistory',
        'state_timestamp' => 'stateTimestamp',
        'vco_ip' => 'vcoIp',
        'vco_replication_ip' => 'vcoReplicationIp',
        'vco_uuid' => 'vcoUuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_address' => 'setActiveAddress',
        'active_replication_address' => 'setActiveReplicationAddress',
        'client_contact' => 'setClientContact',
        'client_count' => 'setClientCount',
        'dr_state' => 'setDrState',
        'dr_vco_user' => 'setDrVcoUser',
        'failure_description' => 'setFailureDescription',
        'last_dr_protected_time' => 'setLastDrProtectedTime',
        'role' => 'setRole',
        'role_timestamp' => 'setRoleTimestamp',
        'standby_list' => 'setStandbyList',
        'state_history' => 'setStateHistory',
        'state_timestamp' => 'setStateTimestamp',
        'vco_ip' => 'setVcoIp',
        'vco_replication_ip' => 'setVcoReplicationIp',
        'vco_uuid' => 'setVcoUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_address' => 'getActiveAddress',
        'active_replication_address' => 'getActiveReplicationAddress',
        'client_contact' => 'getClientContact',
        'client_count' => 'getClientCount',
        'dr_state' => 'getDrState',
        'dr_vco_user' => 'getDrVcoUser',
        'failure_description' => 'getFailureDescription',
        'last_dr_protected_time' => 'getLastDrProtectedTime',
        'role' => 'getRole',
        'role_timestamp' => 'getRoleTimestamp',
        'standby_list' => 'getStandbyList',
        'state_history' => 'getStateHistory',
        'state_timestamp' => 'getStateTimestamp',
        'vco_ip' => 'getVcoIp',
        'vco_replication_ip' => 'getVcoReplicationIp',
        'vco_uuid' => 'getVcoUuid'
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

    const DR_STATE_UNCONFIGURED = 'UNCONFIGURED';
    const DR_STATE_ACTIVE_CONFIGURING = 'ACTIVE_CONFIGURING';
    const DR_STATE_ACTIVE_CONFIGURED = 'ACTIVE_CONFIGURED';
    const DR_STATE_LAUNCHING_STANDBY = 'LAUNCHING_STANDBY';
    const DR_STATE_LAUNCHED_STANDBY = 'LAUNCHED_STANDBY';
    const DR_STATE_ACTIVE_WAIT_STANDBY = 'ACTIVE_WAIT_STANDBY';
    const DR_STATE_PENDING_STANDBY_CANDIDATE = 'PENDING_STANDBY_CANDIDATE';
    const DR_STATE_STANDBY_CANDIDATE = 'STANDBY_CANDIDATE';
    const DR_STATE_STANDBY_CONFIG_RQST = 'STANDBY_CONFIG_RQST';
    const DR_STATE_STANDBY_CONFIGURING = 'STANDBY_CONFIGURING';
    const DR_STATE_STANDBY_CONFIGURED = 'STANDBY_CONFIGURED';
    const DR_STATE_PENDING_STANDBY_UNCONFIG = 'PENDING_STANDBY_UNCONFIG';
    const DR_STATE_STANDBY_UNCONFIG = 'STANDBY_UNCONFIG';
    const DR_STATE_PENDING_STANDBY_PROMOTION = 'PENDING_STANDBY_PROMOTION';
    const DR_STATE_STANDBY_PROMOTED = 'STANDBY_PROMOTED';
    const DR_STATE_PENDING_ACTIVE_DEMOTION = 'PENDING_ACTIVE_DEMOTION';
    const DR_STATE_COPYING_DB = 'COPYING_DB';
    const DR_STATE_COPY_DB_DONE = 'COPY_DB_DONE';
    const DR_STATE_COPYING_FILES = 'COPYING_FILES';
    const DR_STATE_COPY_FILES_DONE = 'COPY_FILES_DONE';
    const DR_STATE_SYNC_CONFIGURING = 'SYNC_CONFIGURING';
    const DR_STATE_STANDBY_SYNC = 'STANDBY_SYNC';
    const DR_STATE_STANDBY_BACKGROUND_IMPORT = 'STANDBY_BACKGROUND_IMPORT';
    const DR_STATE_STANDBY_RUNNING = 'STANDBY_RUNNING';
    const DR_STATE_UPGRADING = 'UPGRADING';
    const DR_STATE_FAILURE_ACTIVE_CONFIGURING = 'FAILURE_ACTIVE_CONFIGURING';
    const DR_STATE_FAILURE_LAUNCHING_STANDBY = 'FAILURE_LAUNCHING_STANDBY';
    const DR_STATE_FAILURE_STANDBY_CONFIGURING = 'FAILURE_STANDBY_CONFIGURING';
    const DR_STATE_FAILURE_GET_STANDBY_CONFIG = 'FAILURE_GET_STANDBY_CONFIG';
    const DR_STATE_FAILURE_COPYING_DB = 'FAILURE_COPYING_DB';
    const DR_STATE_FAILURE_COPYING_FILES = 'FAILURE_COPYING_FILES';
    const DR_STATE_FAILURE_SYNC_CONFIGURING = 'FAILURE_SYNC_CONFIGURING';
    const DR_STATE_FAILURE_BACKGROUND_IMPORT = 'FAILURE_BACKGROUND_IMPORT';
    const DR_STATE_FAILURE_SYNCING_FILES = 'FAILURE_SYNCING_FILES';
    const DR_STATE_FAILURE_GET_STANDBY_STATUS = 'FAILURE_GET_STANDBY_STATUS';
    const DR_STATE_FAILURE_GET_ACTIVE_STATUS = 'FAILURE_GET_ACTIVE_STATUS';
    const DR_STATE_FAILURE_MYSQL_ACTIVE_STATUS = 'FAILURE_MYSQL_ACTIVE_STATUS';
    const DR_STATE_FAILURE_MYSQL_STANDBY_STATUS = 'FAILURE_MYSQL_STANDBY_STATUS';
    const DR_STATE_FAILURE_STANDBY_CANDIDATE = 'FAILURE_STANDBY_CANDIDATE';
    const DR_STATE_FAILURE_STANDBY_UNCONFIG = 'FAILURE_STANDBY_UNCONFIG';
    const DR_STATE_FAILURE_STANDBY_PROMOTION = 'FAILURE_STANDBY_PROMOTION';
    const DR_STATE_FAILURE_ACTIVE_DEMOTION = 'FAILURE_ACTIVE_DEMOTION';
    const ROLE_STANDALONE = 'STANDALONE';
    const ROLE_ACTIVE = 'ACTIVE';
    const ROLE_STANDBY = 'STANDBY';
    const ROLE_ZOMBIE = 'ZOMBIE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDrStateAllowableValues()
    {
        return [
            self::DR_STATE_UNCONFIGURED,
            self::DR_STATE_ACTIVE_CONFIGURING,
            self::DR_STATE_ACTIVE_CONFIGURED,
            self::DR_STATE_LAUNCHING_STANDBY,
            self::DR_STATE_LAUNCHED_STANDBY,
            self::DR_STATE_ACTIVE_WAIT_STANDBY,
            self::DR_STATE_PENDING_STANDBY_CANDIDATE,
            self::DR_STATE_STANDBY_CANDIDATE,
            self::DR_STATE_STANDBY_CONFIG_RQST,
            self::DR_STATE_STANDBY_CONFIGURING,
            self::DR_STATE_STANDBY_CONFIGURED,
            self::DR_STATE_PENDING_STANDBY_UNCONFIG,
            self::DR_STATE_STANDBY_UNCONFIG,
            self::DR_STATE_PENDING_STANDBY_PROMOTION,
            self::DR_STATE_STANDBY_PROMOTED,
            self::DR_STATE_PENDING_ACTIVE_DEMOTION,
            self::DR_STATE_COPYING_DB,
            self::DR_STATE_COPY_DB_DONE,
            self::DR_STATE_COPYING_FILES,
            self::DR_STATE_COPY_FILES_DONE,
            self::DR_STATE_SYNC_CONFIGURING,
            self::DR_STATE_STANDBY_SYNC,
            self::DR_STATE_STANDBY_BACKGROUND_IMPORT,
            self::DR_STATE_STANDBY_RUNNING,
            self::DR_STATE_UPGRADING,
            self::DR_STATE_FAILURE_ACTIVE_CONFIGURING,
            self::DR_STATE_FAILURE_LAUNCHING_STANDBY,
            self::DR_STATE_FAILURE_STANDBY_CONFIGURING,
            self::DR_STATE_FAILURE_GET_STANDBY_CONFIG,
            self::DR_STATE_FAILURE_COPYING_DB,
            self::DR_STATE_FAILURE_COPYING_FILES,
            self::DR_STATE_FAILURE_SYNC_CONFIGURING,
            self::DR_STATE_FAILURE_BACKGROUND_IMPORT,
            self::DR_STATE_FAILURE_SYNCING_FILES,
            self::DR_STATE_FAILURE_GET_STANDBY_STATUS,
            self::DR_STATE_FAILURE_GET_ACTIVE_STATUS,
            self::DR_STATE_FAILURE_MYSQL_ACTIVE_STATUS,
            self::DR_STATE_FAILURE_MYSQL_STANDBY_STATUS,
            self::DR_STATE_FAILURE_STANDBY_CANDIDATE,
            self::DR_STATE_FAILURE_STANDBY_UNCONFIG,
            self::DR_STATE_FAILURE_STANDBY_PROMOTION,
            self::DR_STATE_FAILURE_ACTIVE_DEMOTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_STANDALONE,
            self::ROLE_ACTIVE,
            self::ROLE_STANDBY,
            self::ROLE_ZOMBIE,
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
        $this->container['active_address'] = isset($data['active_address']) ? $data['active_address'] : null;
        $this->container['active_replication_address'] = isset($data['active_replication_address']) ? $data['active_replication_address'] : null;
        $this->container['client_contact'] = isset($data['client_contact']) ? $data['client_contact'] : null;
        $this->container['client_count'] = isset($data['client_count']) ? $data['client_count'] : null;
        $this->container['dr_state'] = isset($data['dr_state']) ? $data['dr_state'] : null;
        $this->container['dr_vco_user'] = isset($data['dr_vco_user']) ? $data['dr_vco_user'] : null;
        $this->container['failure_description'] = isset($data['failure_description']) ? $data['failure_description'] : null;
        $this->container['last_dr_protected_time'] = isset($data['last_dr_protected_time']) ? $data['last_dr_protected_time'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['role_timestamp'] = isset($data['role_timestamp']) ? $data['role_timestamp'] : null;
        $this->container['standby_list'] = isset($data['standby_list']) ? $data['standby_list'] : null;
        $this->container['state_history'] = isset($data['state_history']) ? $data['state_history'] : null;
        $this->container['state_timestamp'] = isset($data['state_timestamp']) ? $data['state_timestamp'] : null;
        $this->container['vco_ip'] = isset($data['vco_ip']) ? $data['vco_ip'] : null;
        $this->container['vco_replication_ip'] = isset($data['vco_replication_ip']) ? $data['vco_replication_ip'] : null;
        $this->container['vco_uuid'] = isset($data['vco_uuid']) ? $data['vco_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['active_address'] === null) {
            $invalidProperties[] = "'active_address' can't be null";
        }
        if ($this->container['dr_state'] === null) {
            $invalidProperties[] = "'dr_state' can't be null";
        }
        $allowedValues = $this->getDrStateAllowableValues();
        if (!in_array($this->container['dr_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dr_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['dr_vco_user'] === null) {
            $invalidProperties[] = "'dr_vco_user' can't be null";
        }
        if ($this->container['failure_description'] === null) {
            $invalidProperties[] = "'failure_description' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($this->container['role'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['role_timestamp'] === null) {
            $invalidProperties[] = "'role_timestamp' can't be null";
        }
        if ($this->container['standby_list'] === null) {
            $invalidProperties[] = "'standby_list' can't be null";
        }
        if ($this->container['vco_ip'] === null) {
            $invalidProperties[] = "'vco_ip' can't be null";
        }
        if ($this->container['vco_uuid'] === null) {
            $invalidProperties[] = "'vco_uuid' can't be null";
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

        if ($this->container['active_address'] === null) {
            return false;
        }
        if ($this->container['dr_state'] === null) {
            return false;
        }
        $allowedValues = $this->getDrStateAllowableValues();
        if (!in_array($this->container['dr_state'], $allowedValues)) {
            return false;
        }
        if ($this->container['dr_vco_user'] === null) {
            return false;
        }
        if ($this->container['failure_description'] === null) {
            return false;
        }
        if ($this->container['role'] === null) {
            return false;
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($this->container['role'], $allowedValues)) {
            return false;
        }
        if ($this->container['role_timestamp'] === null) {
            return false;
        }
        if ($this->container['standby_list'] === null) {
            return false;
        }
        if ($this->container['vco_ip'] === null) {
            return false;
        }
        if ($this->container['vco_uuid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets active_address
     *
     * @return string
     */
    public function getActiveAddress()
    {
        return $this->container['active_address'];
    }

    /**
     * Sets active_address
     *
     * @param string $active_address active_address
     *
     * @return $this
     */
    public function setActiveAddress($active_address)
    {
        $this->container['active_address'] = $active_address;

        return $this;
    }

    /**
     * Gets active_replication_address
     *
     * @return string
     */
    public function getActiveReplicationAddress()
    {
        return $this->container['active_replication_address'];
    }

    /**
     * Sets active_replication_address
     *
     * @param string $active_replication_address active_replication_address
     *
     * @return $this
     */
    public function setActiveReplicationAddress($active_replication_address)
    {
        $this->container['active_replication_address'] = $active_replication_address;

        return $this;
    }

    /**
     * Gets client_contact
     *
     * @return \Swagger\Client\Model\DisasterRecoveryClientContact[]
     */
    public function getClientContact()
    {
        return $this->container['client_contact'];
    }

    /**
     * Sets client_contact
     *
     * @param \Swagger\Client\Model\DisasterRecoveryClientContact[] $client_contact client_contact
     *
     * @return $this
     */
    public function setClientContact($client_contact)
    {
        $this->container['client_contact'] = $client_contact;

        return $this;
    }

    /**
     * Gets client_count
     *
     * @return \Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultClientCount
     */
    public function getClientCount()
    {
        return $this->container['client_count'];
    }

    /**
     * Sets client_count
     *
     * @param \Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultClientCount $client_count client_count
     *
     * @return $this
     */
    public function setClientCount($client_count)
    {
        $this->container['client_count'] = $client_count;

        return $this;
    }

    /**
     * Gets dr_state
     *
     * @return string
     */
    public function getDrState()
    {
        return $this->container['dr_state'];
    }

    /**
     * Sets dr_state
     *
     * @param string $dr_state dr_state
     *
     * @return $this
     */
    public function setDrState($dr_state)
    {
        $allowedValues = $this->getDrStateAllowableValues();
        if (!in_array($dr_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dr_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dr_state'] = $dr_state;

        return $this;
    }

    /**
     * Gets dr_vco_user
     *
     * @return string
     */
    public function getDrVcoUser()
    {
        return $this->container['dr_vco_user'];
    }

    /**
     * Sets dr_vco_user
     *
     * @param string $dr_vco_user dr_vco_user
     *
     * @return $this
     */
    public function setDrVcoUser($dr_vco_user)
    {
        $this->container['dr_vco_user'] = $dr_vco_user;

        return $this;
    }

    /**
     * Gets failure_description
     *
     * @return string
     */
    public function getFailureDescription()
    {
        return $this->container['failure_description'];
    }

    /**
     * Sets failure_description
     *
     * @param string $failure_description failure_description
     *
     * @return $this
     */
    public function setFailureDescription($failure_description)
    {
        $this->container['failure_description'] = $failure_description;

        return $this;
    }

    /**
     * Gets last_dr_protected_time
     *
     * @return \DateTime
     */
    public function getLastDrProtectedTime()
    {
        return $this->container['last_dr_protected_time'];
    }

    /**
     * Sets last_dr_protected_time
     *
     * @param \DateTime $last_dr_protected_time last_dr_protected_time
     *
     * @return $this
     */
    public function setLastDrProtectedTime($last_dr_protected_time)
    {
        $this->container['last_dr_protected_time'] = $last_dr_protected_time;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets role_timestamp
     *
     * @return \DateTime
     */
    public function getRoleTimestamp()
    {
        return $this->container['role_timestamp'];
    }

    /**
     * Sets role_timestamp
     *
     * @param \DateTime $role_timestamp role_timestamp
     *
     * @return $this
     */
    public function setRoleTimestamp($role_timestamp)
    {
        $this->container['role_timestamp'] = $role_timestamp;

        return $this;
    }

    /**
     * Gets standby_list
     *
     * @return \Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultStandbyList[]
     */
    public function getStandbyList()
    {
        return $this->container['standby_list'];
    }

    /**
     * Sets standby_list
     *
     * @param \Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultStandbyList[] $standby_list standby_list
     *
     * @return $this
     */
    public function setStandbyList($standby_list)
    {
        $this->container['standby_list'] = $standby_list;

        return $this;
    }

    /**
     * Gets state_history
     *
     * @return \Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultStateHistory[]
     */
    public function getStateHistory()
    {
        return $this->container['state_history'];
    }

    /**
     * Sets state_history
     *
     * @param \Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultStateHistory[] $state_history state_history
     *
     * @return $this
     */
    public function setStateHistory($state_history)
    {
        $this->container['state_history'] = $state_history;

        return $this;
    }

    /**
     * Gets state_timestamp
     *
     * @return \DateTime
     */
    public function getStateTimestamp()
    {
        return $this->container['state_timestamp'];
    }

    /**
     * Sets state_timestamp
     *
     * @param \DateTime $state_timestamp state_timestamp
     *
     * @return $this
     */
    public function setStateTimestamp($state_timestamp)
    {
        $this->container['state_timestamp'] = $state_timestamp;

        return $this;
    }

    /**
     * Gets vco_ip
     *
     * @return string
     */
    public function getVcoIp()
    {
        return $this->container['vco_ip'];
    }

    /**
     * Sets vco_ip
     *
     * @param string $vco_ip vco_ip
     *
     * @return $this
     */
    public function setVcoIp($vco_ip)
    {
        $this->container['vco_ip'] = $vco_ip;

        return $this;
    }

    /**
     * Gets vco_replication_ip
     *
     * @return string
     */
    public function getVcoReplicationIp()
    {
        return $this->container['vco_replication_ip'];
    }

    /**
     * Sets vco_replication_ip
     *
     * @param string $vco_replication_ip vco_replication_ip
     *
     * @return $this
     */
    public function setVcoReplicationIp($vco_replication_ip)
    {
        $this->container['vco_replication_ip'] = $vco_replication_ip;

        return $this;
    }

    /**
     * Gets vco_uuid
     *
     * @return string
     */
    public function getVcoUuid()
    {
        return $this->container['vco_uuid'];
    }

    /**
     * Sets vco_uuid
     *
     * @param string $vco_uuid vco_uuid
     *
     * @return $this
     */
    public function setVcoUuid($vco_uuid)
    {
        $this->container['vco_uuid'] = $vco_uuid;

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


