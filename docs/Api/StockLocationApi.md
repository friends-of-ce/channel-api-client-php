# FriendsOfCE\Channel\ApiClient\StockLocationApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stockLocationCreate()**](StockLocationApi.md#stockLocationCreate) | **POST** /v2/stocklocations |  |
| [**stockLocationIndex()**](StockLocationApi.md#stockLocationIndex) | **GET** /v2/stocklocations | Get the stock locations (or virtual warehouses). |


## `stockLocationCreate()`

```php
stockLocationCreate($merchantStockLocationCreateRequest): \FriendsOfCE\Channel\ApiClient\Model\ApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Channel\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Channel\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Channel\ApiClient\Api\StockLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantStockLocationCreateRequest = new \FriendsOfCE\Channel\ApiClient\Model\MerchantStockLocationCreateRequest(); // \FriendsOfCE\Channel\ApiClient\Model\MerchantStockLocationCreateRequest

try {
    $result = $apiInstance->stockLocationCreate($merchantStockLocationCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockLocationApi->stockLocationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantStockLocationCreateRequest** | [**\FriendsOfCE\Channel\ApiClient\Model\MerchantStockLocationCreateRequest**](../Model/MerchantStockLocationCreateRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Channel\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockLocationIndex()`

```php
stockLocationIndex(): \FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse
```

Get the stock locations (or virtual warehouses).

Get the different stock locations (or virtual warehouses) that are in use.<br />This may include stock locations for 'fulfillment by ... (Amazon/bol/CDiscount)' (FBA/LVB/FBC) solutions.<br />You can use the id's to get to stock of products in specific stock location, e.g. the FBA stock for the products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Channel\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Channel\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Channel\ApiClient\Api\StockLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->stockLocationIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockLocationApi->stockLocationIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FriendsOfCE\Channel\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse**](../Model/CollectionOfMerchantStockLocationWithCountryIsoResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
