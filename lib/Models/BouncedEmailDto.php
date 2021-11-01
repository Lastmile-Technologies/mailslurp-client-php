<?php
/**
 * BouncedEmailDto
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
 * 
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
 * BouncedEmailDto Class Doc Comment
 *
 * @category Class
 * @description Bounced email
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BouncedEmailDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BouncedEmailDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bounce_mta' => 'string',
        'bounce_recipients' => 'string[]',
        'bounce_sub_type' => 'string',
        'bounce_type' => 'string',
        'created_at' => '\DateTime',
        'id' => 'string',
        'notification_type' => 'string',
        'sender' => 'string',
        'sent_to_recipients' => 'string[]',
        'user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bounce_mta' => null,
        'bounce_recipients' => null,
        'bounce_sub_type' => null,
        'bounce_type' => null,
        'created_at' => 'date-time',
        'id' => 'uuid',
        'notification_type' => null,
        'sender' => null,
        'sent_to_recipients' => null,
        'user_id' => 'uuid'
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
        'bounce_mta' => 'bounceMta',
        'bounce_recipients' => 'bounceRecipients',
        'bounce_sub_type' => 'bounceSubType',
        'bounce_type' => 'bounceType',
        'created_at' => 'createdAt',
        'id' => 'id',
        'notification_type' => 'notificationType',
        'sender' => 'sender',
        'sent_to_recipients' => 'sentToRecipients',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bounce_mta' => 'setBounceMta',
        'bounce_recipients' => 'setBounceRecipients',
        'bounce_sub_type' => 'setBounceSubType',
        'bounce_type' => 'setBounceType',
        'created_at' => 'setCreatedAt',
        'id' => 'setId',
        'notification_type' => 'setNotificationType',
        'sender' => 'setSender',
        'sent_to_recipients' => 'setSentToRecipients',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bounce_mta' => 'getBounceMta',
        'bounce_recipients' => 'getBounceRecipients',
        'bounce_sub_type' => 'getBounceSubType',
        'bounce_type' => 'getBounceType',
        'created_at' => 'getCreatedAt',
        'id' => 'getId',
        'notification_type' => 'getNotificationType',
        'sender' => 'getSender',
        'sent_to_recipients' => 'getSentToRecipients',
        'user_id' => 'getUserId'
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
        $this->container['bounce_mta'] = isset($data['bounce_mta']) ? $data['bounce_mta'] : null;
        $this->container['bounce_recipients'] = isset($data['bounce_recipients']) ? $data['bounce_recipients'] : null;
        $this->container['bounce_sub_type'] = isset($data['bounce_sub_type']) ? $data['bounce_sub_type'] : null;
        $this->container['bounce_type'] = isset($data['bounce_type']) ? $data['bounce_type'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['notification_type'] = isset($data['notification_type']) ? $data['notification_type'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['sent_to_recipients'] = isset($data['sent_to_recipients']) ? $data['sent_to_recipients'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['notification_type'] === null) {
            $invalidProperties[] = "'notification_type' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
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
     * Gets bounce_mta
     *
     * @return string|null
     */
    public function getBounceMta()
    {
        return $this->container['bounce_mta'];
    }

    /**
     * Sets bounce_mta
     *
     * @param string|null $bounce_mta bounce_mta
     *
     * @return $this
     */
    public function setBounceMta($bounce_mta)
    {
        $this->container['bounce_mta'] = $bounce_mta;

        return $this;
    }

    /**
     * Gets bounce_recipients
     *
     * @return string[]|null
     */
    public function getBounceRecipients()
    {
        return $this->container['bounce_recipients'];
    }

    /**
     * Sets bounce_recipients
     *
     * @param string[]|null $bounce_recipients bounce_recipients
     *
     * @return $this
     */
    public function setBounceRecipients($bounce_recipients)
    {
        $this->container['bounce_recipients'] = $bounce_recipients;

        return $this;
    }

    /**
     * Gets bounce_sub_type
     *
     * @return string|null
     */
    public function getBounceSubType()
    {
        return $this->container['bounce_sub_type'];
    }

    /**
     * Sets bounce_sub_type
     *
     * @param string|null $bounce_sub_type bounce_sub_type
     *
     * @return $this
     */
    public function setBounceSubType($bounce_sub_type)
    {
        $this->container['bounce_sub_type'] = $bounce_sub_type;

        return $this;
    }

    /**
     * Gets bounce_type
     *
     * @return string|null
     */
    public function getBounceType()
    {
        return $this->container['bounce_type'];
    }

    /**
     * Sets bounce_type
     *
     * @param string|null $bounce_type bounce_type
     *
     * @return $this
     */
    public function setBounceType($bounce_type)
    {
        $this->container['bounce_type'] = $bounce_type;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets notification_type
     *
     * @return string
     */
    public function getNotificationType()
    {
        return $this->container['notification_type'];
    }

    /**
     * Sets notification_type
     *
     * @param string $notification_type notification_type
     *
     * @return $this
     */
    public function setNotificationType($notification_type)
    {
        $this->container['notification_type'] = $notification_type;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets sent_to_recipients
     *
     * @return string[]|null
     */
    public function getSentToRecipients()
    {
        return $this->container['sent_to_recipients'];
    }

    /**
     * Sets sent_to_recipients
     *
     * @param string[]|null $sent_to_recipients sent_to_recipients
     *
     * @return $this
     */
    public function setSentToRecipients($sent_to_recipients)
    {
        $this->container['sent_to_recipients'] = $sent_to_recipients;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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


