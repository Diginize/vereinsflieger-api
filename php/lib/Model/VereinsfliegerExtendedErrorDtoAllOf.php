<?php
/**
 * VereinsfliegerExtendedErrorDtoAllOf
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Diginize\VereinsfliegerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Vereinsflieger REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 466.98009
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Diginize\VereinsfliegerApi\Model;

use \ArrayAccess;
use \Diginize\VereinsfliegerApi\ObjectSerializer;

/**
 * VereinsfliegerExtendedErrorDtoAllOf Class Doc Comment
 *
 * @category Class
 * @package  Diginize\VereinsfliegerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VereinsfliegerExtendedErrorDtoAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VereinsfliegerExtendedErrorDto_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'accesstoken' => 'string',
        'phpsessid' => 'string',
        'urlpath' => 'string',
        'urlfile' => 'string',
        'passphrase' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'url' => null,
        'accesstoken' => null,
        'phpsessid' => null,
        'urlpath' => null,
        'urlfile' => null,
        'passphrase' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'url',
        'accesstoken' => 'accesstoken',
        'phpsessid' => 'PHPSESSID',
        'urlpath' => 'urlpath',
        'urlfile' => 'urlfile',
        'passphrase' => 'passphrase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'accesstoken' => 'setAccesstoken',
        'phpsessid' => 'setPhpsessid',
        'urlpath' => 'setUrlpath',
        'urlfile' => 'setUrlfile',
        'passphrase' => 'setPassphrase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'accesstoken' => 'getAccesstoken',
        'phpsessid' => 'getPhpsessid',
        'urlpath' => 'getUrlpath',
        'urlfile' => 'getUrlfile',
        'passphrase' => 'getPassphrase'
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
        return self::$openAPIModelName;
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['accesstoken'] = isset($data['accesstoken']) ? $data['accesstoken'] : null;
        $this->container['phpsessid'] = isset($data['phpsessid']) ? $data['phpsessid'] : null;
        $this->container['urlpath'] = isset($data['urlpath']) ? $data['urlpath'] : null;
        $this->container['urlfile'] = isset($data['urlfile']) ? $data['urlfile'] : null;
        $this->container['passphrase'] = isset($data['passphrase']) ? $data['passphrase'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets accesstoken
     *
     * @return string|null
     */
    public function getAccesstoken()
    {
        return $this->container['accesstoken'];
    }

    /**
     * Sets accesstoken
     *
     * @param string|null $accesstoken accesstoken
     *
     * @return $this
     */
    public function setAccesstoken($accesstoken)
    {
        $this->container['accesstoken'] = $accesstoken;

        return $this;
    }

    /**
     * Gets phpsessid
     *
     * @return string|null
     */
    public function getPhpsessid()
    {
        return $this->container['phpsessid'];
    }

    /**
     * Sets phpsessid
     *
     * @param string|null $phpsessid phpsessid
     *
     * @return $this
     */
    public function setPhpsessid($phpsessid)
    {
        $this->container['phpsessid'] = $phpsessid;

        return $this;
    }

    /**
     * Gets urlpath
     *
     * @return string|null
     */
    public function getUrlpath()
    {
        return $this->container['urlpath'];
    }

    /**
     * Sets urlpath
     *
     * @param string|null $urlpath urlpath
     *
     * @return $this
     */
    public function setUrlpath($urlpath)
    {
        $this->container['urlpath'] = $urlpath;

        return $this;
    }

    /**
     * Gets urlfile
     *
     * @return string|null
     */
    public function getUrlfile()
    {
        return $this->container['urlfile'];
    }

    /**
     * Sets urlfile
     *
     * @param string|null $urlfile urlfile
     *
     * @return $this
     */
    public function setUrlfile($urlfile)
    {
        $this->container['urlfile'] = $urlfile;

        return $this;
    }

    /**
     * Gets passphrase
     *
     * @return string|null
     */
    public function getPassphrase()
    {
        return $this->container['passphrase'];
    }

    /**
     * Sets passphrase
     *
     * @param string|null $passphrase passphrase
     *
     * @return $this
     */
    public function setPassphrase($passphrase)
    {
        $this->container['passphrase'] = $passphrase;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


