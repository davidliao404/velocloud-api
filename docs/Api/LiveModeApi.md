# Swagger\Client\LiveModeApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**liveModeEnterLiveMode**](LiveModeApi.md#liveModeEnterLiveMode) | **POST** /liveMode/enterLiveMode | Enter live mode on an edge
[**liveModeExitLiveMode**](LiveModeApi.md#liveModeExitLiveMode) | **POST** /liveMode/exitLiveMode | Exit live mode on an edge
[**liveModeReadLiveData**](LiveModeApi.md#liveModeReadLiveData) | **POST** /liveMode/readLiveData | Read live data from an edge that is in live mode


# **liveModeEnterLiveMode**
> \Swagger\Client\Model\LiveModeEnterLiveModeResult liveModeEnterLiveMode($body)

Enter live mode on an edge

Enter live mode on an edge, provided it is not already in live mode  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LiveModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LiveModeEnterLiveMode(); // \Swagger\Client\Model\LiveModeEnterLiveMode | 

try {
    $result = $apiInstance->liveModeEnterLiveMode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveModeApi->liveModeEnterLiveMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LiveModeEnterLiveMode**](../Model/LiveModeEnterLiveMode.md)|  |

### Return type

[**\Swagger\Client\Model\LiveModeEnterLiveModeResult**](../Model/LiveModeEnterLiveModeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **liveModeExitLiveMode**
> \Swagger\Client\Model\LiveModeExitLiveModeResult liveModeExitLiveMode($body)

Exit live mode on an edge

Exit live mode on an edge  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LiveModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LiveModeExitLiveMode(); // \Swagger\Client\Model\LiveModeExitLiveMode | 

try {
    $result = $apiInstance->liveModeExitLiveMode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveModeApi->liveModeExitLiveMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LiveModeExitLiveMode**](../Model/LiveModeExitLiveMode.md)|  |

### Return type

[**\Swagger\Client\Model\LiveModeExitLiveModeResult**](../Model/LiveModeExitLiveModeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **liveModeReadLiveData**
> \Swagger\Client\Model\LiveModeReadLiveDataResult liveModeReadLiveData($body)

Read live data from an edge that is in live mode

Read live data from an edge that is in live mode  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LiveModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LiveModeReadLiveData(); // \Swagger\Client\Model\LiveModeReadLiveData | 

try {
    $result = $apiInstance->liveModeReadLiveData($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveModeApi->liveModeReadLiveData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LiveModeReadLiveData**](../Model/LiveModeReadLiveData.md)|  |

### Return type

[**\Swagger\Client\Model\LiveModeReadLiveDataResult**](../Model/LiveModeReadLiveDataResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

