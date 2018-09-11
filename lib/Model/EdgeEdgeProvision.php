<?php
/**
 * EdgeEdgeProvision
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
 * EdgeEdgeProvision Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeEdgeProvision implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'edge_edge_provision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enterprise_id' => 'int',
        'configuration_id' => 'int',
        'name' => 'string',
        'serial_number' => 'string',
        'model_number' => 'string',
        'description' => 'string',
        'site' => '\Swagger\Client\Model\SiteObject',
        'ha_enabled' => 'bool',
        'generate_certificate' => 'bool',
        'subject_cn' => 'string',
        'subject_o' => 'string',
        'subject_ou' => 'string',
        'challenge_password' => 'string',
        'private_key_password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enterprise_id' => null,
        'configuration_id' => null,
        'name' => null,
        'serial_number' => null,
        'model_number' => null,
        'description' => null,
        'site' => null,
        'ha_enabled' => null,
        'generate_certificate' => null,
        'subject_cn' => null,
        'subject_o' => null,
        'subject_ou' => null,
        'challenge_password' => null,
        'private_key_password' => null
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
        'enterprise_id' => 'enterpriseId',
        'configuration_id' => 'configurationId',
        'name' => 'name',
        'serial_number' => 'serialNumber',
        'model_number' => 'modelNumber',
        'description' => 'description',
        'site' => 'site',
        'ha_enabled' => 'haEnabled',
        'generate_certificate' => 'generateCertificate',
        'subject_cn' => 'subjectCN',
        'subject_o' => 'subjectO',
        'subject_ou' => 'subjectOU',
        'challenge_password' => 'challengePassword',
        'private_key_password' => 'privateKeyPassword'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enterprise_id' => 'setEnterpriseId',
        'configuration_id' => 'setConfigurationId',
        'name' => 'setName',
        'serial_number' => 'setSerialNumber',
        'model_number' => 'setModelNumber',
        'description' => 'setDescription',
        'site' => 'setSite',
        'ha_enabled' => 'setHaEnabled',
        'generate_certificate' => 'setGenerateCertificate',
        'subject_cn' => 'setSubjectCn',
        'subject_o' => 'setSubjectO',
        'subject_ou' => 'setSubjectOu',
        'challenge_password' => 'setChallengePassword',
        'private_key_password' => 'setPrivateKeyPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enterprise_id' => 'getEnterpriseId',
        'configuration_id' => 'getConfigurationId',
        'name' => 'getName',
        'serial_number' => 'getSerialNumber',
        'model_number' => 'getModelNumber',
        'description' => 'getDescription',
        'site' => 'getSite',
        'ha_enabled' => 'getHaEnabled',
        'generate_certificate' => 'getGenerateCertificate',
        'subject_cn' => 'getSubjectCn',
        'subject_o' => 'getSubjectO',
        'subject_ou' => 'getSubjectOu',
        'challenge_password' => 'getChallengePassword',
        'private_key_password' => 'getPrivateKeyPassword'
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

    const MODEL_NUMBER_EDGE500 = 'edge500';
    const MODEL_NUMBER_EDGE5_X0 = 'edge5X0';
    const MODEL_NUMBER_EDGE510 = 'edge510';
    const MODEL_NUMBER_EDGE840 = 'edge840';
    const MODEL_NUMBER_EDGE1000 = 'edge1000';
    const MODEL_NUMBER_EDGE1000QAT = 'edge1000qat';
    const MODEL_NUMBER_VIRTUAL = 'virtual';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModelNumberAllowableValues()
    {
        return [
            self::MODEL_NUMBER_EDGE500,
            self::MODEL_NUMBER_EDGE5_X0,
            self::MODEL_NUMBER_EDGE510,
            self::MODEL_NUMBER_EDGE840,
            self::MODEL_NUMBER_EDGE1000,
            self::MODEL_NUMBER_EDGE1000QAT,
            self::MODEL_NUMBER_VIRTUAL,
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
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['configuration_id'] = isset($data['configuration_id']) ? $data['configuration_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['model_number'] = isset($data['model_number']) ? $data['model_number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['ha_enabled'] = isset($data['ha_enabled']) ? $data['ha_enabled'] : null;
        $this->container['generate_certificate'] = isset($data['generate_certificate']) ? $data['generate_certificate'] : null;
        $this->container['subject_cn'] = isset($data['subject_cn']) ? $data['subject_cn'] : null;
        $this->container['subject_o'] = isset($data['subject_o']) ? $data['subject_o'] : null;
        $this->container['subject_ou'] = isset($data['subject_ou']) ? $data['subject_ou'] : null;
        $this->container['challenge_password'] = isset($data['challenge_password']) ? $data['challenge_password'] : null;
        $this->container['private_key_password'] = isset($data['private_key_password']) ? $data['private_key_password'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['configuration_id'] === null) {
            $invalidProperties[] = "'configuration_id' can't be null";
        }
        if ($this->container['model_number'] === null) {
            $invalidProperties[] = "'model_number' can't be null";
        }
        $allowedValues = $this->getModelNumberAllowableValues();
        if (!in_array($this->container['model_number'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'model_number', must be one of '%s'",
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

        if ($this->container['configuration_id'] === null) {
            return false;
        }
        if ($this->container['model_number'] === null) {
            return false;
        }
        $allowedValues = $this->getModelNumberAllowableValues();
        if (!in_array($this->container['model_number'], $allowedValues)) {
            return false;
        }
        return true;
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
     * Gets configuration_id
     *
     * @return int
     */
    public function getConfigurationId()
    {
        return $this->container['configuration_id'];
    }

    /**
     * Sets configuration_id
     *
     * @param int $configuration_id configuration_id
     *
     * @return $this
     */
    public function setConfigurationId($configuration_id)
    {
        $this->container['configuration_id'] = $configuration_id;

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
        $allowedValues = $this->getModelNumberAllowableValues();
        if (!in_array($model_number, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'model_number', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['model_number'] = $model_number;

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
     * Gets site
     *
     * @return \Swagger\Client\Model\SiteObject
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param \Swagger\Client\Model\SiteObject $site site
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets ha_enabled
     *
     * @return bool
     */
    public function getHaEnabled()
    {
        return $this->container['ha_enabled'];
    }

    /**
     * Sets ha_enabled
     *
     * @param bool $ha_enabled ha_enabled
     *
     * @return $this
     */
    public function setHaEnabled($ha_enabled)
    {
        $this->container['ha_enabled'] = $ha_enabled;

        return $this;
    }

    /**
     * Gets generate_certificate
     *
     * @return bool
     */
    public function getGenerateCertificate()
    {
        return $this->container['generate_certificate'];
    }

    /**
     * Sets generate_certificate
     *
     * @param bool $generate_certificate generate_certificate
     *
     * @return $this
     */
    public function setGenerateCertificate($generate_certificate)
    {
        $this->container['generate_certificate'] = $generate_certificate;

        return $this;
    }

    /**
     * Gets subject_cn
     *
     * @return string
     */
    public function getSubjectCn()
    {
        return $this->container['subject_cn'];
    }

    /**
     * Sets subject_cn
     *
     * @param string $subject_cn subject_cn
     *
     * @return $this
     */
    public function setSubjectCn($subject_cn)
    {
        $this->container['subject_cn'] = $subject_cn;

        return $this;
    }

    /**
     * Gets subject_o
     *
     * @return string
     */
    public function getSubjectO()
    {
        return $this->container['subject_o'];
    }

    /**
     * Sets subject_o
     *
     * @param string $subject_o subject_o
     *
     * @return $this
     */
    public function setSubjectO($subject_o)
    {
        $this->container['subject_o'] = $subject_o;

        return $this;
    }

    /**
     * Gets subject_ou
     *
     * @return string
     */
    public function getSubjectOu()
    {
        return $this->container['subject_ou'];
    }

    /**
     * Sets subject_ou
     *
     * @param string $subject_ou subject_ou
     *
     * @return $this
     */
    public function setSubjectOu($subject_ou)
    {
        $this->container['subject_ou'] = $subject_ou;

        return $this;
    }

    /**
     * Gets challenge_password
     *
     * @return string
     */
    public function getChallengePassword()
    {
        return $this->container['challenge_password'];
    }

    /**
     * Sets challenge_password
     *
     * @param string $challenge_password challenge_password
     *
     * @return $this
     */
    public function setChallengePassword($challenge_password)
    {
        $this->container['challenge_password'] = $challenge_password;

        return $this;
    }

    /**
     * Gets private_key_password
     *
     * @return string
     */
    public function getPrivateKeyPassword()
    {
        return $this->container['private_key_password'];
    }

    /**
     * Sets private_key_password
     *
     * @param string $private_key_password private_key_password
     *
     * @return $this
     */
    public function setPrivateKeyPassword($private_key_password)
    {
        $this->container['private_key_password'] = $private_key_password;

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


