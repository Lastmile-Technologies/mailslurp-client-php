<?php
/**
 * CreateInboxDtoTest
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
 * Please update the test case below to test the model.
 */

namespace MailSlurp;

use PHPUnit\Framework\TestCase;

/**
 * CreateInboxDtoTest Class Doc Comment
 *
 * @category    Class
 * @description Options for creating an inbox. An inbox has a real email address that can send and receive emails. Inboxes can be permanent or expire at a given time. Inboxes are either &#x60;SMTP&#x60; or &#x60;HTTP&#x60; mailboxes. &#x60;SMTP&#x60; inboxes are receive only and processed by a mail server running at &#x60;mx.mailslurp.com&#x60; while &#x60;HTTP&#x60; inboxes can send and receive and are processed by AWS SES. Inboxes can use a custom email address (by verifying your own domain) or a randomly assigned email ending in either &#x60;mailslurp.com&#x60; or (if &#x60;useDomainPool&#x60; is enabled) ending in a similar domain such as &#x60;mailslurp.xyz&#x60; (selected at random).
 * @package     MailSlurp
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CreateInboxDtoTest extends TestCase
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
     * Test "CreateInboxDto"
     */
    public function testCreateInboxDto()
    {
    }

    /**
     * Test attribute "email_address"
     */
    public function testPropertyEmailAddress()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "use_domain_pool"
     */
    public function testPropertyUseDomainPool()
    {
    }

    /**
     * Test attribute "tags"
     */
    public function testPropertyTags()
    {
    }

    /**
     * Test attribute "expires_at"
     */
    public function testPropertyExpiresAt()
    {
    }

    /**
     * Test attribute "favourite"
     */
    public function testPropertyFavourite()
    {
    }

    /**
     * Test attribute "expires_in"
     */
    public function testPropertyExpiresIn()
    {
    }

    /**
     * Test attribute "allow_team_access"
     */
    public function testPropertyAllowTeamAccess()
    {
    }

    /**
     * Test attribute "inbox_type"
     */
    public function testPropertyInboxType()
    {
    }
}
