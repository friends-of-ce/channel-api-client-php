# FriendsOfCE\Channel\ApiClient\ChannelsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**channelPluginsGet()**](ChannelsApi.md#channelPluginsGet) | **GET** /v2/channels | Get Channels. |


## `channelPluginsGet()`

```php
channelPluginsGet(): \FriendsOfCE\Channel\ApiClient\Model\CollectionOfChannelGlobalChannelResponse
```

Get Channels.

Get all channels (excluding deleted ones).<br />You can use the returned ids to query the listed products for this channel from the ListedProducts endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Channel\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Channel\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Channel\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->channelPluginsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelPluginsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FriendsOfCE\Channel\ApiClient\Model\CollectionOfChannelGlobalChannelResponse**](../Model/CollectionOfChannelGlobalChannelResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
