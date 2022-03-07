<?php
/**
 * ImapSmtpAccessDetails
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
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://www.mailslurp.com/docs/) - [Examples](https://github.com/mailslurp/examples) repository
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
 * ImapSmtpAccessDetails Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImapSmtpAccessDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImapSmtpAccessDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'smtp_server_host' => 'string',
        'smtp_server_port' => 'int',
        'smtp_username' => 'string',
        'smtp_password' => 'string',
        'imap_server_host' => 'string',
        'imap_server_port' => 'int',
        'imap_username' => 'string',
        'imap_password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'smtp_server_host' => null,
        'smtp_server_port' => 'int32',
        'smtp_username' => null,
        'smtp_password' => null,
        'imap_server_host' => null,
        'imap_server_port' => 'int32',
        'imap_username' => null,
        'imap_password' => null
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
        'smtp_server_host' => 'smtpServerHost',
        'smtp_server_port' => 'smtpServerPort',
        'smtp_username' => 'smtpUsername',
        'smtp_password' => 'smtpPassword',
        'imap_server_host' => 'imapServerHost',
        'imap_server_port' => 'imapServerPort',
        'imap_username' => 'imapUsername',
        'imap_password' => 'imapPassword'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'smtp_server_host' => 'setSmtpServerHost',
        'smtp_server_port' => 'setSmtpServerPort',
        'smtp_username' => 'setSmtpUsername',
        'smtp_password' => 'setSmtpPassword',
        'imap_server_host' => 'setImapServerHost',
        'imap_server_port' => 'setImapServerPort',
        'imap_username' => 'setImapUsername',
        'imap_password' => 'setImapPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'smtp_server_host' => 'getSmtpServerHost',
        'smtp_server_port' => 'getSmtpServerPort',
        'smtp_username' => 'getSmtpUsername',
        'smtp_password' => 'getSmtpPassword',
        'imap_server_host' => 'getImapServerHost',
        'imap_server_port' => 'getImapServerPort',
        'imap_username' => 'getImapUsername',
        'imap_password' => 'getImapPassword'
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
        $this->container['smtp_server_host'] = isset($data['smtp_server_host']) ? $data['smtp_server_host'] : null;
        $this->container['smtp_server_port'] = isset($data['smtp_server_port']) ? $data['smtp_server_port'] : null;
        $this->container['smtp_username'] = isset($data['smtp_username']) ? $data['smtp_username'] : null;
        $this->container['smtp_password'] = isset($data['smtp_password']) ? $data['smtp_password'] : null;
        $this->container['imap_server_host'] = isset($data['imap_server_host']) ? $data['imap_server_host'] : null;
        $this->container['imap_server_port'] = isset($data['imap_server_port']) ? $data['imap_server_port'] : null;
        $this->container['imap_username'] = isset($data['imap_username']) ? $data['imap_username'] : null;
        $this->container['imap_password'] = isset($data['imap_password']) ? $data['imap_password'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['smtp_server_host'] === null) {
            $invalidProperties[] = "'smtp_server_host' can't be null";
        }
        if ($this->container['smtp_server_port'] === null) {
            $invalidProperties[] = "'smtp_server_port' can't be null";
        }
        if ($this->container['smtp_username'] === null) {
            $invalidProperties[] = "'smtp_username' can't be null";
        }
        if ($this->container['smtp_password'] === null) {
            $invalidProperties[] = "'smtp_password' can't be null";
        }
        if ($this->container['imap_server_host'] === null) {
            $invalidProperties[] = "'imap_server_host' can't be null";
        }
        if ($this->container['imap_server_port'] === null) {
            $invalidProperties[] = "'imap_server_port' can't be null";
        }
        if ($this->container['imap_username'] === null) {
            $invalidProperties[] = "'imap_username' can't be null";
        }
        if ($this->container['imap_password'] === null) {
            $invalidProperties[] = "'imap_password' can't be null";
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
     * Gets smtp_server_host
     *
     * @return string
     */
    public function getSmtpServerHost()
    {
        return $this->container['smtp_server_host'];
    }

    /**
     * Sets smtp_server_host
     *
     * @param string $smtp_server_host smtp_server_host
     *
     * @return $this
     */
    public function setSmtpServerHost($smtp_server_host)
    {
        $this->container['smtp_server_host'] = $smtp_server_host;

        return $this;
    }

    /**
     * Gets smtp_server_port
     *
     * @return int
     */
    public function getSmtpServerPort()
    {
        return $this->container['smtp_server_port'];
    }

    /**
     * Sets smtp_server_port
     *
     * @param int $smtp_server_port smtp_server_port
     *
     * @return $this
     */
    public function setSmtpServerPort($smtp_server_port)
    {
        $this->container['smtp_server_port'] = $smtp_server_port;

        return $this;
    }

    /**
     * Gets smtp_username
     *
     * @return string
     */
    public function getSmtpUsername()
    {
        return $this->container['smtp_username'];
    }

    /**
     * Sets smtp_username
     *
     * @param string $smtp_username smtp_username
     *
     * @return $this
     */
    public function setSmtpUsername($smtp_username)
    {
        $this->container['smtp_username'] = $smtp_username;

        return $this;
    }

    /**
     * Gets smtp_password
     *
     * @return string
     */
    public function getSmtpPassword()
    {
        return $this->container['smtp_password'];
    }

    /**
     * Sets smtp_password
     *
     * @param string $smtp_password smtp_password
     *
     * @return $this
     */
    public function setSmtpPassword($smtp_password)
    {
        $this->container['smtp_password'] = $smtp_password;

        return $this;
    }

    /**
     * Gets imap_server_host
     *
     * @return string
     */
    public function getImapServerHost()
    {
        return $this->container['imap_server_host'];
    }

    /**
     * Sets imap_server_host
     *
     * @param string $imap_server_host imap_server_host
     *
     * @return $this
     */
    public function setImapServerHost($imap_server_host)
    {
        $this->container['imap_server_host'] = $imap_server_host;

        return $this;
    }

    /**
     * Gets imap_server_port
     *
     * @return int
     */
    public function getImapServerPort()
    {
        return $this->container['imap_server_port'];
    }

    /**
     * Sets imap_server_port
     *
     * @param int $imap_server_port imap_server_port
     *
     * @return $this
     */
    public function setImapServerPort($imap_server_port)
    {
        $this->container['imap_server_port'] = $imap_server_port;

        return $this;
    }

    /**
     * Gets imap_username
     *
     * @return string
     */
    public function getImapUsername()
    {
        return $this->container['imap_username'];
    }

    /**
     * Sets imap_username
     *
     * @param string $imap_username imap_username
     *
     * @return $this
     */
    public function setImapUsername($imap_username)
    {
        $this->container['imap_username'] = $imap_username;

        return $this;
    }

    /**
     * Gets imap_password
     *
     * @return string
     */
    public function getImapPassword()
    {
        return $this->container['imap_password'];
    }

    /**
     * Sets imap_password
     *
     * @param string $imap_password imap_password
     *
     * @return $this
     */
    public function setImapPassword($imap_password)
    {
        $this->container['imap_password'] = $imap_password;

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

