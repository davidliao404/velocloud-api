# Swagger\Client\InventoryManagementApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vcoInventoryGetInventoryItems**](InventoryManagementApi.md#vcoInventoryGetInventoryItems) | **POST** /vcoInventory/getInventoryItems | Return inventory items available at this VCO


# **vcoInventoryGetInventoryItems**
> \Swagger\Client\Model\VcoInventoryGetInventoryItemsResult vcoInventoryGetInventoryItems($body)

Return inventory items available at this VCO

Retrieve all the inventory information available with this VCO. This method does not have required parameters. The optional parameters are  enterpriseId - Return inventory items belonging to that enterprise. If the caller context is an enterprise, this value will be taken from token itself. modifiedSince - Used to retrieve inventory items that have been modified in the last modifiedSince hours. with - an array containing the string \"edge\" to get details about details about the provisioned edge if any.  Privileges required:  `READ` `INVENTORY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\VcoInventoryGetInventoryItems(); // \Swagger\Client\Model\VcoInventoryGetInventoryItems | 

try {
    $result = $apiInstance->vcoInventoryGetInventoryItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryManagementApi->vcoInventoryGetInventoryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VcoInventoryGetInventoryItems**](../Model/VcoInventoryGetInventoryItems.md)|  |

### Return type

[**\Swagger\Client\Model\VcoInventoryGetInventoryItemsResult**](../Model/VcoInventoryGetInventoryItemsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

