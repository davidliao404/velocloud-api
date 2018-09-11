<?php
/**
 * ApplicationMetadata
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
 * ApplicationMetadata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplicationMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'application_metadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blob_id' => 'int',
        'created' => '\DateTime',
        'description' => 'string',
        'file_name' => 'string',
        'id' => 'int',
        'logical_id' => 'string',
        'manifest' => '\Swagger\Client\Model\ApplicationMetadataManifest',
        'modified' => '\DateTime',
        'name' => 'string',
        'network_id' => 'int',
        'type' => 'string',
        'upload_details' => '\Swagger\Client\Model\ApplicationMetadataUploadDetails',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blob_id' => null,
        'created' => 'date-time',
        'description' => null,
        'file_name' => null,
        'id' => null,
        'logical_id' => null,
        'manifest' => null,
        'modified' => 'date-time',
        'name' => null,
        'network_id' => null,
        'type' => null,
        'upload_details' => null,
        'version' => null
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
        'blob_id' => 'blobId',
        'created' => 'created',
        'description' => 'description',
        'file_name' => 'fileName',
        'id' => 'id',
        'logical_id' => 'logicalId',
        'manifest' => 'manifest',
        'modified' => 'modified',
        'name' => 'name',
        'network_id' => 'networkId',
        'type' => 'type',
        'upload_details' => 'uploadDetails',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blob_id' => 'setBlobId',
        'created' => 'setCreated',
        'description' => 'setDescription',
        'file_name' => 'setFileName',
        'id' => 'setId',
        'logical_id' => 'setLogicalId',
        'manifest' => 'setManifest',
        'modified' => 'setModified',
        'name' => 'setName',
        'network_id' => 'setNetworkId',
        'type' => 'setType',
        'upload_details' => 'setUploadDetails',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blob_id' => 'getBlobId',
        'created' => 'getCreated',
        'description' => 'getDescription',
        'file_name' => 'getFileName',
        'id' => 'getId',
        'logical_id' => 'getLogicalId',
        'manifest' => 'getManifest',
        'modified' => 'getModified',
        'name' => 'getName',
        'network_id' => 'getNetworkId',
        'type' => 'getType',
        'upload_details' => 'getUploadDetails',
        'version' => 'getVersion'
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
        $this->container['blob_id'] = isset($data['blob_id']) ? $data['blob_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['logical_id'] = isset($data['logical_id']) ? $data['logical_id'] : null;
        $this->container['manifest'] = isset($data['manifest']) ? $data['manifest'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['upload_details'] = isset($data['upload_details']) ? $data['upload_details'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['blob_id'] === null) {
            $invalidProperties[] = "'blob_id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['file_name'] === null) {
            $invalidProperties[] = "'file_name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['logical_id'] === null) {
            $invalidProperties[] = "'logical_id' can't be null";
        }
        if ($this->container['manifest'] === null) {
            $invalidProperties[] = "'manifest' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalidProperties[] = "'modified' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['network_id'] === null) {
            $invalidProperties[] = "'network_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['upload_details'] === null) {
            $invalidProperties[] = "'upload_details' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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

        if ($this->container['blob_id'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['file_name'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['logical_id'] === null) {
            return false;
        }
        if ($this->container['manifest'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['network_id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['upload_details'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets blob_id
     *
     * @return int
     */
    public function getBlobId()
    {
        return $this->container['blob_id'];
    }

    /**
     * Sets blob_id
     *
     * @param int $blob_id blob_id
     *
     * @return $this
     */
    public function setBlobId($blob_id)
    {
        $this->container['blob_id'] = $blob_id;

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
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
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
     * Gets manifest
     *
     * @return \Swagger\Client\Model\ApplicationMetadataManifest
     */
    public function getManifest()
    {
        return $this->container['manifest'];
    }

    /**
     * Sets manifest
     *
     * @param \Swagger\Client\Model\ApplicationMetadataManifest $manifest manifest
     *
     * @return $this
     */
    public function setManifest($manifest)
    {
        $this->container['manifest'] = $manifest;

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
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets upload_details
     *
     * @return \Swagger\Client\Model\ApplicationMetadataUploadDetails
     */
    public function getUploadDetails()
    {
        return $this->container['upload_details'];
    }

    /**
     * Sets upload_details
     *
     * @param \Swagger\Client\Model\ApplicationMetadataUploadDetails $upload_details upload_details
     *
     * @return $this
     */
    public function setUploadDetails($upload_details)
    {
        $this->container['upload_details'] = $upload_details;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

