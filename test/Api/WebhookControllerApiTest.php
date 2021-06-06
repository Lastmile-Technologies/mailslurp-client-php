<?php
/**
 * WebhookControllerApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace MailSlurp;

use \MailSlurp\Configuration;
use \MailSlurp\ApiException;
use \MailSlurp\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * WebhookControllerApiTest Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookControllerApiTest extends TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for createWebhook
     *
     * Attach a WebHook URL to an inbox.
     *
     */
    public function testCreateWebhook()
    {
    }

    /**
     * Test case for deleteWebhook
     *
     * Delete and disable a Webhook for an Inbox.
     *
     */
    public function testDeleteWebhook()
    {
    }

    /**
     * Test case for getAllWebhooks
     *
     * List Webhooks Paginated.
     *
     */
    public function testGetAllWebhooks()
    {
    }

    /**
     * Test case for getTestWebhookPayload
     *
     * Get test webhook payload example. Response content depends on eventName passed. Uses `EMAIL_RECEIVED` as default..
     *
     */
    public function testGetTestWebhookPayload()
    {
    }

    /**
     * Test case for getTestWebhookPayloadNewAttachment
     *
     * Get webhook test payload for new attachment event.
     *
     */
    public function testGetTestWebhookPayloadNewAttachment()
    {
    }

    /**
     * Test case for getTestWebhookPayloadNewContact
     *
     * Get webhook test payload for new contact event.
     *
     */
    public function testGetTestWebhookPayloadNewContact()
    {
    }

    /**
     * Test case for getTestWebhookPayloadNewEmail
     *
     * Get webhook test payload for new email event.
     *
     */
    public function testGetTestWebhookPayloadNewEmail()
    {
    }

    /**
     * Test case for getWebhook
     *
     * Get a webhook for an Inbox.
     *
     */
    public function testGetWebhook()
    {
    }

    /**
     * Test case for getWebhooks
     *
     * Get all webhooks for an Inbox.
     *
     */
    public function testGetWebhooks()
    {
    }

    /**
     * Test case for sendTestData
     *
     * Send webhook test data.
     *
     */
    public function testSendTestData()
    {
    }
}
