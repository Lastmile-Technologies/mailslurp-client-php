<?php
/**
 * InboxControllerApiTest
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
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.   ## Resources - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://www.mailslurp.com/docs/) - [Examples](https://github.com/mailslurp/examples) repository
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
 * InboxControllerApiTest Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InboxControllerApiTest extends TestCase
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
     * Test case for createInbox
     *
     * Create an inbox email address. An inbox has a real email address and can send and receive emails..
     *
     */
    public function testCreateInbox()
    {
    }

    /**
     * Test case for createInboxWithDefaults
     *
     * Create an inbox with default options. Uses MailSlurp domain pool address and is private..
     *
     */
    public function testCreateInboxWithDefaults()
    {
    }

    /**
     * Test case for createInboxWithOptions
     *
     * Create an inbox with options. Extended options for inbox creation..
     *
     */
    public function testCreateInboxWithOptions()
    {
    }

    /**
     * Test case for deleteAllInboxes
     *
     * Delete all inboxes.
     *
     */
    public function testDeleteAllInboxes()
    {
    }

    /**
     * Test case for deleteInbox
     *
     * Delete inbox.
     *
     */
    public function testDeleteInbox()
    {
    }

    /**
     * Test case for getAllInboxes
     *
     * List All Inboxes Paginated.
     *
     */
    public function testGetAllInboxes()
    {
    }

    /**
     * Test case for getEmails
     *
     * Get emails in an Inbox. This method is not idempotent as it allows retries and waits if you want certain conditions to be met before returning. For simple listing and sorting of known emails use the email controller instead..
     *
     */
    public function testGetEmails()
    {
    }

    /**
     * Test case for getInbox
     *
     * Get Inbox. Returns properties of an inbox..
     *
     */
    public function testGetInbox()
    {
    }

    /**
     * Test case for getInboxEmailsPaginated
     *
     * Get inbox emails paginated.
     *
     */
    public function testGetInboxEmailsPaginated()
    {
    }

    /**
     * Test case for getInboxSentEmails
     *
     * Get Inbox Sent Emails.
     *
     */
    public function testGetInboxSentEmails()
    {
    }

    /**
     * Test case for getInboxTags
     *
     * Get inbox tags.
     *
     */
    public function testGetInboxTags()
    {
    }

    /**
     * Test case for getInboxes
     *
     * List Inboxes and email eddresses.
     *
     */
    public function testGetInboxes()
    {
    }

    /**
     * Test case for getOrganizationInboxes
     *
     * List Organization Inboxes Paginated.
     *
     */
    public function testGetOrganizationInboxes()
    {
    }

    /**
     * Test case for sendEmail
     *
     * Send Email.
     *
     */
    public function testSendEmail()
    {
    }

    /**
     * Test case for sendEmailAndConfirm
     *
     * Send email and return sent confirmation.
     *
     */
    public function testSendEmailAndConfirm()
    {
    }

    /**
     * Test case for setInboxFavourited
     *
     * Set inbox favourited state.
     *
     */
    public function testSetInboxFavourited()
    {
    }

    /**
     * Test case for updateInbox
     *
     * Update Inbox. Change name and description. Email address is not editable..
     *
     */
    public function testUpdateInbox()
    {
    }
}
