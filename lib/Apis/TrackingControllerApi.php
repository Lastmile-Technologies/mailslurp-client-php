<?php
/**
 * TrackingControllerApi
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

namespace MailSlurp\Apis;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MailSlurp\ApiException;
use MailSlurp\Configuration;
use MailSlurp\HeaderSelector;
use MailSlurp\ObjectSerializer;

/**
 * TrackingControllerApi Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrackingControllerApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createTrackingPixel
     *
     * Create tracking pixel
     *
     * @param  \MailSlurp\Models\CreateTrackingPixelOptions $create_tracking_pixel_options create_tracking_pixel_options (required)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\TrackingPixelDto
     */
    public function createTrackingPixel($create_tracking_pixel_options)
    {
        list($response) = $this->createTrackingPixelWithHttpInfo($create_tracking_pixel_options);
        return $response;
    }

    /**
     * Operation createTrackingPixelWithHttpInfo
     *
     * Create tracking pixel
     *
     * @param  \MailSlurp\Models\CreateTrackingPixelOptions $create_tracking_pixel_options (required)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\TrackingPixelDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTrackingPixelWithHttpInfo($create_tracking_pixel_options)
    {
        $request = $this->createTrackingPixelRequest($create_tracking_pixel_options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 201:
                    if ('\MailSlurp\Models\TrackingPixelDto' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\TrackingPixelDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\TrackingPixelDto';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MailSlurp\Models\TrackingPixelDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createTrackingPixelAsync
     *
     * Create tracking pixel
     *
     * @param  \MailSlurp\Models\CreateTrackingPixelOptions $create_tracking_pixel_options (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTrackingPixelAsync($create_tracking_pixel_options)
    {
        return $this->createTrackingPixelAsyncWithHttpInfo($create_tracking_pixel_options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTrackingPixelAsyncWithHttpInfo
     *
     * Create tracking pixel
     *
     * @param  \MailSlurp\Models\CreateTrackingPixelOptions $create_tracking_pixel_options (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTrackingPixelAsyncWithHttpInfo($create_tracking_pixel_options)
    {
        $returnType = '\MailSlurp\Models\TrackingPixelDto';
        $request = $this->createTrackingPixelRequest($create_tracking_pixel_options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createTrackingPixel'
     *
     * @param  \MailSlurp\Models\CreateTrackingPixelOptions $create_tracking_pixel_options (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createTrackingPixelRequest($create_tracking_pixel_options)
    {
        // verify the required parameter 'create_tracking_pixel_options' is set
        if ($create_tracking_pixel_options === null || (is_array($create_tracking_pixel_options) && count($create_tracking_pixel_options) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_tracking_pixel_options when calling createTrackingPixel'
            );
        }

        $resourcePath = '/tracking/pixels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($create_tracking_pixel_options)) {
            $_tempBody = $create_tracking_pixel_options;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAllTrackingPixels
     *
     * Get tracking pixels
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\PageTrackingPixelProjection
     */
    public function getAllTrackingPixels($page = 0, $size = 20, $sort = 'ASC', $search_filter = null, $since = null, $before = null)
    {
        list($response) = $this->getAllTrackingPixelsWithHttpInfo($page, $size, $sort, $search_filter, $since, $before);
        return $response;
    }

    /**
     * Operation getAllTrackingPixelsWithHttpInfo
     *
     * Get tracking pixels
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\PageTrackingPixelProjection, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllTrackingPixelsWithHttpInfo($page = 0, $size = 20, $sort = 'ASC', $search_filter = null, $since = null, $before = null)
    {
        $request = $this->getAllTrackingPixelsRequest($page, $size, $sort, $search_filter, $since, $before);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\MailSlurp\Models\PageTrackingPixelProjection' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\PageTrackingPixelProjection', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\PageTrackingPixelProjection';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MailSlurp\Models\PageTrackingPixelProjection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllTrackingPixelsAsync
     *
     * Get tracking pixels
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllTrackingPixelsAsync($page = 0, $size = 20, $sort = 'ASC', $search_filter = null, $since = null, $before = null)
    {
        return $this->getAllTrackingPixelsAsyncWithHttpInfo($page, $size, $sort, $search_filter, $since, $before)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllTrackingPixelsAsyncWithHttpInfo
     *
     * Get tracking pixels
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllTrackingPixelsAsyncWithHttpInfo($page = 0, $size = 20, $sort = 'ASC', $search_filter = null, $since = null, $before = null)
    {
        $returnType = '\MailSlurp\Models\PageTrackingPixelProjection';
        $request = $this->getAllTrackingPixelsRequest($page, $size, $sort, $search_filter, $since, $before);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllTrackingPixels'
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAllTrackingPixelsRequest($page = 0, $size = 20, $sort = 'ASC', $search_filter = null, $since = null, $before = null)
    {

        $resourcePath = '/tracking/pixels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($size !== null) {
            if('form' === 'form' && is_array($size)) {
                foreach($size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['size'] = $size;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }
        // query params
        if ($search_filter !== null) {
            if('form' === 'form' && is_array($search_filter)) {
                foreach($search_filter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['searchFilter'] = $search_filter;
            }
        }
        // query params
        if ($since !== null) {
            if('form' === 'form' && is_array($since)) {
                foreach($since as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['since'] = $since;
            }
        }
        // query params
        if ($before !== null) {
            if('form' === 'form' && is_array($before)) {
                foreach($before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['before'] = $before;
            }
        }



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTrackingPixel
     *
     * Get pixel
     *
     * @param  string $id id (required)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\TrackingPixelDto
     */
    public function getTrackingPixel($id)
    {
        list($response) = $this->getTrackingPixelWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getTrackingPixelWithHttpInfo
     *
     * Get pixel
     *
     * @param  string $id (required)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\TrackingPixelDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrackingPixelWithHttpInfo($id)
    {
        $request = $this->getTrackingPixelRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\MailSlurp\Models\TrackingPixelDto' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\TrackingPixelDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\TrackingPixelDto';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MailSlurp\Models\TrackingPixelDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrackingPixelAsync
     *
     * Get pixel
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrackingPixelAsync($id)
    {
        return $this->getTrackingPixelAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrackingPixelAsyncWithHttpInfo
     *
     * Get pixel
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrackingPixelAsyncWithHttpInfo($id)
    {
        $returnType = '\MailSlurp\Models\TrackingPixelDto';
        $request = $this->getTrackingPixelRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrackingPixel'
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrackingPixelRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getTrackingPixel'
            );
        }

        $resourcePath = '/tracking/pixels/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
