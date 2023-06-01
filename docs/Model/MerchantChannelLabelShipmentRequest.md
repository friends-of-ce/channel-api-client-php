# # MerchantChannelLabelShipmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimensions** | [**\FriendsOfCE\Channel\ApiClient\Model\MerchantShipmentPackageDimensionsRequest**](MerchantShipmentPackageDimensionsRequest.md) |  |
**weight** | [**\FriendsOfCE\Channel\ApiClient\Model\MerchantShipmentPackageWeightRequest**](MerchantShipmentPackageWeightRequest.md) |  |
**channelMethodCode** | **string** |  |
**merchantShipmentNo** | **string** | The unique shipment reference used by the Merchant. |
**merchantOrderNo** | **string** | The unique order reference used by the Merchant. |
**shippedFromCountryCode** | **string** | The code of the country from where the package is being shipped. | [optional]
**shippedFromStockLocationId** | **int** |  | [optional]
**lines** | [**\FriendsOfCE\Channel\ApiClient\Model\MerchantShipmentLineRequest[]**](MerchantShipmentLineRequest.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
