# Swagger\Client\MetaApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meta**](MetaApi.md#meta) | **POST** /meta/{apiPath} | Get meta-data on any other API call


# **meta**
> \Swagger\Client\Model\InlineResponse200 meta($api_path)

Get meta-data on any other API call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_path = "api_path_example"; // string | the path to another api method, starting after /rest/

try {
    $result = $apiInstance->meta($api_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->meta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_path** | **string**| the path to another api method, starting after /rest/ |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

