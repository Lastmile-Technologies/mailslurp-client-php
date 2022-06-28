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
     * Test case for createAccountWebhook
     *
     * Attach a WebHook URL to an inbox.
     *
     */
    public function testCreateAccountWebhook()
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
     * Test case for deleteAllWebhooks
     *
     * Delete all webhooks.
     *
     */
    public function testDeleteAllWebhooks()
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
     * Test case for deleteWebhookById
     *
     * Delete a webhook.
     *
     */
    public function testDeleteWebhookById()
    {
    }

    /**
     * Test case for getAllWebhookResults
     *
     * Get results for all webhooks.
     *
     */
    public function testGetAllWebhookResults()
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
     * Test case for getInboxWebhooksPaginated
     *
     * Get paginated webhooks for an Inbox.
     *
     */
    public function testGetInboxWebhooksPaginated()
    {
    }

    /**
     * Test case for getJsonSchemaForWebhookEvent
     *
     * .
     *
     */
    public function testGetJsonSchemaForWebhookEvent()
    {
    }

    /**
     * Test case for getJsonSchemaForWebhookPayload
     *
     * .
     *
     */
    public function testGetJsonSchemaForWebhookPayload()
    {
    }

    /**
     * Test case for getTestWebhookPayload
     *
     * .
     *
     */
    public function testGetTestWebhookPayload()
    {
    }

    /**
     * Test case for getTestWebhookPayloadBounce
     *
     * .
     *
     */
    public function testGetTestWebhookPayloadBounce()
    {
    }

    /**
     * Test case for getTestWebhookPayloadBounceRecipient
     *
     * .
     *
     */
    public function testGetTestWebhookPayloadBounceRecipient()
    {
    }

    /**
     * Test case for getTestWebhookPayloadEmailOpened
     *
     * .
     *
     */
    public function testGetTestWebhookPayloadEmailOpened()
    {
    }

    /**
     * Test case for getTestWebhookPayloadEmailRead
     *
     * .
     *
     */
    public function testGetTestWebhookPayloadEmailRead()
    {
    }

    /**
     * Test case for getTestWebhookPayloadForWebhook
     *
     * .
     *
     */
    public function testGetTestWebhookPayloadForWebhook()
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
     * Get a webhook.
     *
     */
    public function testGetWebhook()
    {
    }

    /**
     * Test case for getWebhookResult
     *
     * Get a webhook result for a webhook.
     *
     */
    public function testGetWebhookResult()
    {
    }

    /**
     * Test case for getWebhookResults
     *
     * Get a webhook results for a webhook.
     *
     */
    public function testGetWebhookResults()
    {
    }

    /**
     * Test case for getWebhookResultsUnseenErrorCount
     *
     * Get count of unseen webhook results with error status.
     *
     */
    public function testGetWebhookResultsUnseenErrorCount()
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
     * Test case for redriveWebhookResult
     *
     * Get a webhook result and try to resend the original webhook payload.
     *
     */
    public function testRedriveWebhookResult()
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

    /**
     * Test case for verifyWebhookSignature
     *
     * Verify a webhook payload signature.
     *
     */
    public function testVerifyWebhookSignature()
    {
    }
}
