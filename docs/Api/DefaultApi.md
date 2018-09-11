# Swagger\Client\DefaultApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**setClientDeviceHostName**](DefaultApi.md#setClientDeviceHostName) | **POST** /clientDevice/setClientDeviceHostName | Set hostname for client device


# **setClientDeviceHostName**
> \Swagger\Client\Model\SetClientDeviceHostNameResult setClientDeviceHostName($body)

Set hostname for client device

Set hostname for client device  Privileges required:  `UPDATE` `CLIENT_DEVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SetClientDeviceHostName(); // \Swagger\Client\Model\SetClientDeviceHostName | 

try {
    $result = $apiInstance->setClientDeviceHostName($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setClientDeviceHostName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SetClientDeviceHostName**](../Model/SetClientDeviceHostName.md)|  |

### Return type

[**\Swagger\Client\Model\SetClientDeviceHostNameResult**](../Model/SetClientDeviceHostNameResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

