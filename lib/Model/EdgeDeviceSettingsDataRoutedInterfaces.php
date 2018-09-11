<?php
/**
 * EdgeDeviceSettingsDataRoutedInterfaces
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
 * EdgeDeviceSettingsDataRoutedInterfaces Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeDeviceSettingsDataRoutedInterfaces implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'edgeDeviceSettingsData_routedInterfaces';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addressing' => '\Swagger\Client\Model\EdgeDeviceSettingsDataAddressing',
        'advertise' => 'bool',
        'disabled' => 'bool',
        'dhcp_server' => '\Swagger\Client\Model\EdgeDeviceSettingsDataDhcpServer',
        'encrypt_overlay' => 'bool',
        'l2' => '\Swagger\Client\Model\EdgeDeviceSettingsDataL2',
        'name' => 'string',
        'nat_direct' => 'bool',
        'ospf' => '\Swagger\Client\Model\EdgeDeviceSettingsDataOspf',
        'override' => 'bool',
        'subinterfaces' => '\Swagger\Client\Model\EdgeDeviceSettingsDataSubinterfaces[]',
        'vlan_id' => 'int',
        'wan_overlay' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addressing' => null,
        'advertise' => null,
        'disabled' => null,
        'dhcp_server' => null,
        'encrypt_overlay' => null,
        'l2' => null,
        'name' => null,
        'nat_direct' => null,
        'ospf' => null,
        'override' => null,
        'subinterfaces' => null,
        'vlan_id' => null,
        'wan_overlay' => null
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
        'addressing' => 'addressing',
        'advertise' => 'advertise',
        'disabled' => 'disabled',
        'dhcp_server' => 'dhcpServer',
        'encrypt_overlay' => 'encryptOverlay',
        'l2' => 'l2',
        'name' => 'name',
        'nat_direct' => 'natDirect',
        'ospf' => 'ospf',
        'override' => 'override',
        'subinterfaces' => 'subinterfaces',
        'vlan_id' => 'vlanId',
        'wan_overlay' => 'wanOverlay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addressing' => 'setAddressing',
        'advertise' => 'setAdvertise',
        'disabled' => 'setDisabled',
        'dhcp_server' => 'setDhcpServer',
        'encrypt_overlay' => 'setEncryptOverlay',
        'l2' => 'setL2',
        'name' => 'setName',
        'nat_direct' => 'setNatDirect',
        'ospf' => 'setOspf',
        'override' => 'setOverride',
        'subinterfaces' => 'setSubinterfaces',
        'vlan_id' => 'setVlanId',
        'wan_overlay' => 'setWanOverlay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addressing' => 'getAddressing',
        'advertise' => 'getAdvertise',
        'disabled' => 'getDisabled',
        'dhcp_server' => 'getDhcpServer',
        'encrypt_overlay' => 'getEncryptOverlay',
        'l2' => 'getL2',
        'name' => 'getName',
        'nat_direct' => 'getNatDirect',
        'ospf' => 'getOspf',
        'override' => 'getOverride',
        'subinterfaces' => 'getSubinterfaces',
        'vlan_id' => 'getVlanId',
        'wan_overlay' => 'getWanOverlay'
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

    const WAN_OVERLAY_DISABLED = 'DISABLED';
    const WAN_OVERLAY_AUTO_DISCOVERED = 'AUTO_DISCOVERED';
    const WAN_OVERLAY_USER_DEFINED = 'USER_DEFINED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWanOverlayAllowableValues()
    {
        return [
            self::WAN_OVERLAY_DISABLED,
            self::WAN_OVERLAY_AUTO_DISCOVERED,
            self::WAN_OVERLAY_USER_DEFINED,
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
        $this->container['addressing'] = isset($data['addressing']) ? $data['addressing'] : null;
        $this->container['advertise'] = isset($data['advertise']) ? $data['advertise'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['dhcp_server'] = isset($data['dhcp_server']) ? $data['dhcp_server'] : null;
        $this->container['encrypt_overlay'] = isset($data['encrypt_overlay']) ? $data['encrypt_overlay'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nat_direct'] = isset($data['nat_direct']) ? $data['nat_direct'] : null;
        $this->container['ospf'] = isset($data['ospf']) ? $data['ospf'] : null;
        $this->container['override'] = isset($data['override']) ? $data['override'] : null;
        $this->container['subinterfaces'] = isset($data['subinterfaces']) ? $data['subinterfaces'] : null;
        $this->container['vlan_id'] = isset($data['vlan_id']) ? $data['vlan_id'] : null;
        $this->container['wan_overlay'] = isset($data['wan_overlay']) ? $data['wan_overlay'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWanOverlayAllowableValues();
        if (!in_array($this->container['wan_overlay'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'wan_overlay', must be one of '%s'",
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

        $allowedValues = $this->getWanOverlayAllowableValues();
        if (!in_array($this->container['wan_overlay'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets addressing
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataAddressing
     */
    public function getAddressing()
    {
        return $this->container['addressing'];
    }

    /**
     * Sets addressing
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataAddressing $addressing addressing
     *
     * @return $this
     */
    public function setAddressing($addressing)
    {
        $this->container['addressing'] = $addressing;

        return $this;
    }

    /**
     * Gets advertise
     *
     * @return bool
     */
    public function getAdvertise()
    {
        return $this->container['advertise'];
    }

    /**
     * Sets advertise
     *
     * @param bool $advertise advertise
     *
     * @return $this
     */
    public function setAdvertise($advertise)
    {
        $this->container['advertise'] = $advertise;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool $disabled disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets dhcp_server
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataDhcpServer
     */
    public function getDhcpServer()
    {
        return $this->container['dhcp_server'];
    }

    /**
     * Sets dhcp_server
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataDhcpServer $dhcp_server dhcp_server
     *
     * @return $this
     */
    public function setDhcpServer($dhcp_server)
    {
        $this->container['dhcp_server'] = $dhcp_server;

        return $this;
    }

    /**
     * Gets encrypt_overlay
     *
     * @return bool
     */
    public function getEncryptOverlay()
    {
        return $this->container['encrypt_overlay'];
    }

    /**
     * Sets encrypt_overlay
     *
     * @param bool $encrypt_overlay encrypt_overlay
     *
     * @return $this
     */
    public function setEncryptOverlay($encrypt_overlay)
    {
        $this->container['encrypt_overlay'] = $encrypt_overlay;

        return $this;
    }

    /**
     * Gets l2
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataL2
     */
    public function getL2()
    {
        return $this->container['l2'];
    }

    /**
     * Sets l2
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataL2 $l2 l2
     *
     * @return $this
     */
    public function setL2($l2)
    {
        $this->container['l2'] = $l2;

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
     * Gets nat_direct
     *
     * @return bool
     */
    public function getNatDirect()
    {
        return $this->container['nat_direct'];
    }

    /**
     * Sets nat_direct
     *
     * @param bool $nat_direct nat_direct
     *
     * @return $this
     */
    public function setNatDirect($nat_direct)
    {
        $this->container['nat_direct'] = $nat_direct;

        return $this;
    }

    /**
     * Gets ospf
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataOspf
     */
    public function getOspf()
    {
        return $this->container['ospf'];
    }

    /**
     * Sets ospf
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataOspf $ospf ospf
     *
     * @return $this
     */
    public function setOspf($ospf)
    {
        $this->container['ospf'] = $ospf;

        return $this;
    }

    /**
     * Gets override
     *
     * @return bool
     */
    public function getOverride()
    {
        return $this->container['override'];
    }

    /**
     * Sets override
     *
     * @param bool $override override
     *
     * @return $this
     */
    public function setOverride($override)
    {
        $this->container['override'] = $override;

        return $this;
    }

    /**
     * Gets subinterfaces
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataSubinterfaces[]
     */
    public function getSubinterfaces()
    {
        return $this->container['subinterfaces'];
    }

    /**
     * Sets subinterfaces
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataSubinterfaces[] $subinterfaces subinterfaces
     *
     * @return $this
     */
    public function setSubinterfaces($subinterfaces)
    {
        $this->container['subinterfaces'] = $subinterfaces;

        return $this;
    }

    /**
     * Gets vlan_id
     *
     * @return int
     */
    public function getVlanId()
    {
        return $this->container['vlan_id'];
    }

    /**
     * Sets vlan_id
     *
     * @param int $vlan_id static only
     *
     * @return $this
     */
    public function setVlanId($vlan_id)
    {
        $this->container['vlan_id'] = $vlan_id;

        return $this;
    }

    /**
     * Gets wan_overlay
     *
     * @return string
     */
    public function getWanOverlay()
    {
        return $this->container['wan_overlay'];
    }

    /**
     * Sets wan_overlay
     *
     * @param string $wan_overlay wan_overlay
     *
     * @return $this
     */
    public function setWanOverlay($wan_overlay)
    {
        $allowedValues = $this->getWanOverlayAllowableValues();
        if (!is_null($wan_overlay) && !in_array($wan_overlay, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'wan_overlay', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['wan_overlay'] = $wan_overlay;

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


