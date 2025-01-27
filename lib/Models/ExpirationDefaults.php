<?php
/**
 * ExpirationDefaults
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * Contact: contact@mailslurp.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * ExpirationDefaults Class Doc Comment
 *
 * @category Class
 * @description Expiration defaults for your account
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExpirationDefaults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpirationDefaults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_expiration_millis' => 'int',
        'max_expiration_millis' => 'int',
        'default_expires_at' => '\DateTime',
        'can_permanent_inbox' => 'bool',
        'next_inbox_allows_permanent' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'default_expiration_millis' => 'int64',
        'max_expiration_millis' => 'int64',
        'default_expires_at' => 'date-time',
        'can_permanent_inbox' => null,
        'next_inbox_allows_permanent' => null
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
        'default_expiration_millis' => 'defaultExpirationMillis',
        'max_expiration_millis' => 'maxExpirationMillis',
        'default_expires_at' => 'defaultExpiresAt',
        'can_permanent_inbox' => 'canPermanentInbox',
        'next_inbox_allows_permanent' => 'nextInboxAllowsPermanent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_expiration_millis' => 'setDefaultExpirationMillis',
        'max_expiration_millis' => 'setMaxExpirationMillis',
        'default_expires_at' => 'setDefaultExpiresAt',
        'can_permanent_inbox' => 'setCanPermanentInbox',
        'next_inbox_allows_permanent' => 'setNextInboxAllowsPermanent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_expiration_millis' => 'getDefaultExpirationMillis',
        'max_expiration_millis' => 'getMaxExpirationMillis',
        'default_expires_at' => 'getDefaultExpiresAt',
        'can_permanent_inbox' => 'getCanPermanentInbox',
        'next_inbox_allows_permanent' => 'getNextInboxAllowsPermanent'
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
        $this->container['default_expiration_millis'] = isset($data['default_expiration_millis']) ? $data['default_expiration_millis'] : null;
        $this->container['max_expiration_millis'] = isset($data['max_expiration_millis']) ? $data['max_expiration_millis'] : null;
        $this->container['default_expires_at'] = isset($data['default_expires_at']) ? $data['default_expires_at'] : null;
        $this->container['can_permanent_inbox'] = isset($data['can_permanent_inbox']) ? $data['can_permanent_inbox'] : null;
        $this->container['next_inbox_allows_permanent'] = isset($data['next_inbox_allows_permanent']) ? $data['next_inbox_allows_permanent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['can_permanent_inbox'] === null) {
            $invalidProperties[] = "'can_permanent_inbox' can't be null";
        }
        if ($this->container['next_inbox_allows_permanent'] === null) {
            $invalidProperties[] = "'next_inbox_allows_permanent' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets default_expiration_millis
     *
     * @return int|null
     */
    public function getDefaultExpirationMillis()
    {
        return $this->container['default_expiration_millis'];
    }

    /**
     * Sets default_expiration_millis
     *
     * @param int|null $default_expiration_millis default_expiration_millis
     *
     * @return $this
     */
    public function setDefaultExpirationMillis($default_expiration_millis)
    {
        $this->container['default_expiration_millis'] = $default_expiration_millis;

        return $this;
    }

    /**
     * Gets max_expiration_millis
     *
     * @return int|null
     */
    public function getMaxExpirationMillis()
    {
        return $this->container['max_expiration_millis'];
    }

    /**
     * Sets max_expiration_millis
     *
     * @param int|null $max_expiration_millis max_expiration_millis
     *
     * @return $this
     */
    public function setMaxExpirationMillis($max_expiration_millis)
    {
        $this->container['max_expiration_millis'] = $max_expiration_millis;

        return $this;
    }

    /**
     * Gets default_expires_at
     *
     * @return \DateTime|null
     */
    public function getDefaultExpiresAt()
    {
        return $this->container['default_expires_at'];
    }

    /**
     * Sets default_expires_at
     *
     * @param \DateTime|null $default_expires_at default_expires_at
     *
     * @return $this
     */
    public function setDefaultExpiresAt($default_expires_at)
    {
        $this->container['default_expires_at'] = $default_expires_at;

        return $this;
    }

    /**
     * Gets can_permanent_inbox
     *
     * @return bool
     */
    public function getCanPermanentInbox()
    {
        return $this->container['can_permanent_inbox'];
    }

    /**
     * Sets can_permanent_inbox
     *
     * @param bool $can_permanent_inbox can_permanent_inbox
     *
     * @return $this
     */
    public function setCanPermanentInbox($can_permanent_inbox)
    {
        $this->container['can_permanent_inbox'] = $can_permanent_inbox;

        return $this;
    }

    /**
     * Gets next_inbox_allows_permanent
     *
     * @return bool
     */
    public function getNextInboxAllowsPermanent()
    {
        return $this->container['next_inbox_allows_permanent'];
    }

    /**
     * Sets next_inbox_allows_permanent
     *
     * @param bool $next_inbox_allows_permanent next_inbox_allows_permanent
     *
     * @return $this
     */
    public function setNextInboxAllowsPermanent($next_inbox_allows_permanent)
    {
        $this->container['next_inbox_allows_permanent'] = $next_inbox_allows_permanent;

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


