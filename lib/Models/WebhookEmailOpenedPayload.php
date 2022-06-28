<?php
/**
 * WebhookEmailOpenedPayload
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
 * WebhookEmailOpenedPayload Class Doc Comment
 *
 * @category Class
 * @description EMAIL_OPENED webhook payload. Sent to your webhook url endpoint via HTTP POST when an email containing a tracking pixel is opened and the pixel image is loaded by a reader.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookEmailOpenedPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookEmailOpenedPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message_id' => 'string',
        'webhook_id' => 'string',
        'event_name' => 'string',
        'webhook_name' => 'string',
        'inbox_id' => 'string',
        'pixel_id' => 'string',
        'sent_email_id' => 'string',
        'recipient' => 'string',
        'created_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'message_id' => null,
        'webhook_id' => 'uuid',
        'event_name' => null,
        'webhook_name' => null,
        'inbox_id' => 'uuid',
        'pixel_id' => 'uuid',
        'sent_email_id' => 'uuid',
        'recipient' => null,
        'created_at' => 'date-time'
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
        'message_id' => 'messageId',
        'webhook_id' => 'webhookId',
        'event_name' => 'eventName',
        'webhook_name' => 'webhookName',
        'inbox_id' => 'inboxId',
        'pixel_id' => 'pixelId',
        'sent_email_id' => 'sentEmailId',
        'recipient' => 'recipient',
        'created_at' => 'createdAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_id' => 'setMessageId',
        'webhook_id' => 'setWebhookId',
        'event_name' => 'setEventName',
        'webhook_name' => 'setWebhookName',
        'inbox_id' => 'setInboxId',
        'pixel_id' => 'setPixelId',
        'sent_email_id' => 'setSentEmailId',
        'recipient' => 'setRecipient',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_id' => 'getMessageId',
        'webhook_id' => 'getWebhookId',
        'event_name' => 'getEventName',
        'webhook_name' => 'getWebhookName',
        'inbox_id' => 'getInboxId',
        'pixel_id' => 'getPixelId',
        'sent_email_id' => 'getSentEmailId',
        'recipient' => 'getRecipient',
        'created_at' => 'getCreatedAt'
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

    const EVENT_NAME_EMAIL_RECEIVED = 'EMAIL_RECEIVED';
    const EVENT_NAME_NEW_EMAIL = 'NEW_EMAIL';
    const EVENT_NAME_NEW_CONTACT = 'NEW_CONTACT';
    const EVENT_NAME_NEW_ATTACHMENT = 'NEW_ATTACHMENT';
    const EVENT_NAME_EMAIL_OPENED = 'EMAIL_OPENED';
    const EVENT_NAME_EMAIL_READ = 'EMAIL_READ';
    const EVENT_NAME_BOUNCE = 'BOUNCE';
    const EVENT_NAME_BOUNCE_RECIPIENT = 'BOUNCE_RECIPIENT';
    const EVENT_NAME_NEW_SMS = 'NEW_SMS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventNameAllowableValues()
    {
        return [
            self::EVENT_NAME_EMAIL_RECEIVED,
            self::EVENT_NAME_NEW_EMAIL,
            self::EVENT_NAME_NEW_CONTACT,
            self::EVENT_NAME_NEW_ATTACHMENT,
            self::EVENT_NAME_EMAIL_OPENED,
            self::EVENT_NAME_EMAIL_READ,
            self::EVENT_NAME_BOUNCE,
            self::EVENT_NAME_BOUNCE_RECIPIENT,
            self::EVENT_NAME_NEW_SMS,
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
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['webhook_id'] = isset($data['webhook_id']) ? $data['webhook_id'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['webhook_name'] = isset($data['webhook_name']) ? $data['webhook_name'] : null;
        $this->container['inbox_id'] = isset($data['inbox_id']) ? $data['inbox_id'] : null;
        $this->container['pixel_id'] = isset($data['pixel_id']) ? $data['pixel_id'] : null;
        $this->container['sent_email_id'] = isset($data['sent_email_id']) ? $data['sent_email_id'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message_id'] === null) {
            $invalidProperties[] = "'message_id' can't be null";
        }
        if ($this->container['webhook_id'] === null) {
            $invalidProperties[] = "'webhook_id' can't be null";
        }
        if ($this->container['event_name'] === null) {
            $invalidProperties[] = "'event_name' can't be null";
        }
        $allowedValues = $this->getEventNameAllowableValues();
        if (!is_null($this->container['event_name']) && !in_array($this->container['event_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['inbox_id'] === null) {
            $invalidProperties[] = "'inbox_id' can't be null";
        }
        if ($this->container['pixel_id'] === null) {
            $invalidProperties[] = "'pixel_id' can't be null";
        }
        if ($this->container['sent_email_id'] === null) {
            $invalidProperties[] = "'sent_email_id' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id Idempotent message ID. Store this ID locally or in a database to prevent message duplication.
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets webhook_id
     *
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param string $webhook_id ID of webhook entity being triggered
     *
     * @return $this
     */
    public function setWebhookId($webhook_id)
    {
        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name Name of the event type webhook is being triggered for.
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $allowedValues = $this->getEventNameAllowableValues();
        if (!in_array($event_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets webhook_name
     *
     * @return string|null
     */
    public function getWebhookName()
    {
        return $this->container['webhook_name'];
    }

    /**
     * Sets webhook_name
     *
     * @param string|null $webhook_name Name of the webhook being triggered
     *
     * @return $this
     */
    public function setWebhookName($webhook_name)
    {
        $this->container['webhook_name'] = $webhook_name;

        return $this;
    }

    /**
     * Gets inbox_id
     *
     * @return string
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string $inbox_id Id of the inbox that received an email
     *
     * @return $this
     */
    public function setInboxId($inbox_id)
    {
        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets pixel_id
     *
     * @return string
     */
    public function getPixelId()
    {
        return $this->container['pixel_id'];
    }

    /**
     * Sets pixel_id
     *
     * @param string $pixel_id ID of the tracking pixel
     *
     * @return $this
     */
    public function setPixelId($pixel_id)
    {
        $this->container['pixel_id'] = $pixel_id;

        return $this;
    }

    /**
     * Gets sent_email_id
     *
     * @return string
     */
    public function getSentEmailId()
    {
        return $this->container['sent_email_id'];
    }

    /**
     * Sets sent_email_id
     *
     * @param string $sent_email_id ID of sent email
     *
     * @return $this
     */
    public function setSentEmailId($sent_email_id)
    {
        $this->container['sent_email_id'] = $sent_email_id;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient Email address for the recipient of the tracking pixel
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

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
     * @param \DateTime $created_at Date time of event creation
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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


