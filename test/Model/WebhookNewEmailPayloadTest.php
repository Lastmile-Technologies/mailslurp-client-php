<?php
/**
 * WebhookNewEmailPayloadTest
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
 * Please update the test case below to test the model.
 */

namespace MailSlurp;

use PHPUnit\Framework\TestCase;

/**
 * WebhookNewEmailPayloadTest Class Doc Comment
 *
 * @category    Class
 * @description NEW_EMAIL webhook payload. Sent to your webhook url endpoint via HTTP POST when an email is received by the inbox that your webhook is attached to. Use the email ID to fetch the full email body or attachments.
 * @package     MailSlurp
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class WebhookNewEmailPayloadTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "WebhookNewEmailPayload"
     */
    public function testWebhookNewEmailPayload()
    {
    }

    /**
     * Test attribute "message_id"
     */
    public function testPropertyMessageId()
    {
    }

    /**
     * Test attribute "webhook_id"
     */
    public function testPropertyWebhookId()
    {
    }

    /**
     * Test attribute "event_name"
     */
    public function testPropertyEventName()
    {
    }

    /**
     * Test attribute "webhook_name"
     */
    public function testPropertyWebhookName()
    {
    }

    /**
     * Test attribute "inbox_id"
     */
    public function testPropertyInboxId()
    {
    }

    /**
     * Test attribute "email_id"
     */
    public function testPropertyEmailId()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
    }

    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
    }

    /**
     * Test attribute "cc"
     */
    public function testPropertyCc()
    {
    }

    /**
     * Test attribute "bcc"
     */
    public function testPropertyBcc()
    {
    }

    /**
     * Test attribute "subject"
     */
    public function testPropertySubject()
    {
    }

    /**
     * Test attribute "attachment_meta_datas"
     */
    public function testPropertyAttachmentMetaDatas()
    {
    }
}
