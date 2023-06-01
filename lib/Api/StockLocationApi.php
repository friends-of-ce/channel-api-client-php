<?php
/**
 * StockLocationApi
 * PHP version 7.4
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Channel\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FriendsOfCE\Channel\ApiClient\ApiException;
use FriendsOfCE\Channel\ApiClient\Configuration;
use FriendsOfCE\Channel\ApiClient\HeaderSelector;
use FriendsOfCE\Channel\ApiClient\ObjectSerializer;

/**
 * StockLocationApi Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StockLocationApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'stockLocationCreate' => [
            'application/json-patch+json',
            'application/json',
            'application/*+json',
        ],
        'stockLocationIndex' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Operation stockLocationCreate
     *
     * @param  \FriendsOfCE\Channel\ApiClient\Model\MerchantStockLocationCreateRequest $merchantStockLocationCreateRequest merchantStockLocationCreateRequest (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationCreate'] to see the possible values for this operation
     *
     * @throws \FriendsOfCE\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FriendsOfCE\Channel\ApiClient\Model\ApiResponse|\FriendsOfCE\Channel\ApiClient\Model\ApiResponse
     */
    public function stockLocationCreate($merchantStockLocationCreateRequest = null, string $contentType = self::contentTypes['stockLocationCreate'][0])
    {
        list($response) = $this->stockLocationCreateWithHttpInfo($merchantStockLocationCreateRequest, $contentType);
        return $response;
    }

    /**
     * Operation stockLocationCreateWithHttpInfo
     *
     * @param  \FriendsOfCE\Channel\ApiClient\Model\MerchantStockLocationCreateRequest $merchantStockLocationCreateRequest (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationCreate'] to see the possible values for this operation
     *
     * @throws \FriendsOfCE\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FriendsOfCE\Channel\ApiClient\Model\ApiResponse|\FriendsOfCE\Channel\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function stockLocationCreateWithHttpInfo($merchantStockLocationCreateRequest = null, string $contentType = self::contentTypes['stockLocationCreate'][0])
    {
        $request = $this->stockLocationCreateRequest($merchantStockLocationCreateRequest, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\FriendsOfCE\Channel\ApiClient\Model\ApiResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\FriendsOfCE\Channel\ApiClient\Model\ApiResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\FriendsOfCE\Channel\ApiClient\Model\ApiResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\FriendsOfCE\Channel\ApiClient\Model\ApiResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\FriendsOfCE\Channel\ApiClient\Model\ApiResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\FriendsOfCE\Channel\ApiClient\Model\ApiResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\FriendsOfCE\Channel\ApiClient\Model\ApiResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\FriendsOfCE\Channel\ApiClient\Model\ApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FriendsOfCE\Channel\ApiClient\Model\ApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation stockLocationCreateAsync
     *
     * @param  \FriendsOfCE\Channel\ApiClient\Model\MerchantStockLocationCreateRequest $merchantStockLocationCreateRequest (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stockLocationCreateAsync($merchantStockLocationCreateRequest = null, string $contentType = self::contentTypes['stockLocationCreate'][0])
    {
        return $this->stockLocationCreateAsyncWithHttpInfo($merchantStockLocationCreateRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stockLocationCreateAsyncWithHttpInfo
     *
     * @param  \FriendsOfCE\Channel\ApiClient\Model\MerchantStockLocationCreateRequest $merchantStockLocationCreateRequest (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stockLocationCreateAsyncWithHttpInfo($merchantStockLocationCreateRequest = null, string $contentType = self::contentTypes['stockLocationCreate'][0])
    {
        $returnType = '\FriendsOfCE\Channel\ApiClient\Model\ApiResponse';
        $request = $this->stockLocationCreateRequest($merchantStockLocationCreateRequest, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'stockLocationCreate'
     *
     * @param  \FriendsOfCE\Channel\ApiClient\Model\MerchantStockLocationCreateRequest $merchantStockLocationCreateRequest (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function stockLocationCreateRequest($merchantStockLocationCreateRequest = null, string $contentType = self::contentTypes['stockLocationCreate'][0])
    {



        $resourcePath = '/v2/stocklocations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($merchantStockLocationCreateRequest)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($merchantStockLocationCreateRequest));
            } else {
                $httpBody = $merchantStockLocationCreateRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation stockLocationIndex
     *
     * Get the stock locations (or virtual warehouses).
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationIndex'] to see the possible values for this operation
     *
     * @throws \FriendsOfCE\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse
     */
    public function stockLocationIndex(string $contentType = self::contentTypes['stockLocationIndex'][0])
    {
        list($response) = $this->stockLocationIndexWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation stockLocationIndexWithHttpInfo
     *
     * Get the stock locations (or virtual warehouses).
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationIndex'] to see the possible values for this operation
     *
     * @throws \FriendsOfCE\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function stockLocationIndexWithHttpInfo(string $contentType = self::contentTypes['stockLocationIndex'][0])
    {
        $request = $this->stockLocationIndexRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation stockLocationIndexAsync
     *
     * Get the stock locations (or virtual warehouses).
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stockLocationIndexAsync(string $contentType = self::contentTypes['stockLocationIndex'][0])
    {
        return $this->stockLocationIndexAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stockLocationIndexAsyncWithHttpInfo
     *
     * Get the stock locations (or virtual warehouses).
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stockLocationIndexAsyncWithHttpInfo(string $contentType = self::contentTypes['stockLocationIndex'][0])
    {
        $returnType = '\FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse';
        $request = $this->stockLocationIndexRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'stockLocationIndex'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['stockLocationIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function stockLocationIndexRequest(string $contentType = self::contentTypes['stockLocationIndex'][0])
    {


        $resourcePath = '/v2/stocklocations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
