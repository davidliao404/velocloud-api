# Swagger\Client\GatewayApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gatewayDeleteGateway**](GatewayApi.md#gatewayDeleteGateway) | **POST** /gateway/deleteGateway | Delete a gateway
[**gatewayGatewayProvision**](GatewayApi.md#gatewayGatewayProvision) | **POST** /gateway/gatewayProvision | Provision a gateway
[**gatewayUpdateGatewayAttributes**](GatewayApi.md#gatewayUpdateGatewayAttributes) | **POST** /gateway/updateGatewayAttributes | Update gateway attributes


# **gatewayDeleteGateway**
> \Swagger\Client\Model\GatewayDeleteGatewayResult gatewayDeleteGateway($body)

Delete a gateway

Delete a gateway by id.  Privileges required:  `DELETE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayDeleteGateway(); // \Swagger\Client\Model\GatewayDeleteGateway | 

try {
    $result = $apiInstance->gatewayDeleteGateway($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->gatewayDeleteGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayDeleteGateway**](../Model/GatewayDeleteGateway.md)|  |

### Return type

[**\Swagger\Client\Model\GatewayDeleteGatewayResult**](../Model/GatewayDeleteGatewayResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gatewayGatewayProvision**
> \Swagger\Client\Model\GatewayGatewayProvisionResult gatewayGatewayProvision($body)

Provision a gateway

Provision a gateway into an operator network.  Privileges required:  `CREATE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayGatewayProvision(); // \Swagger\Client\Model\GatewayGatewayProvision | 

try {
    $result = $apiInstance->gatewayGatewayProvision($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->gatewayGatewayProvision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayGatewayProvision**](../Model/GatewayGatewayProvision.md)|  |

### Return type

[**\Swagger\Client\Model\GatewayGatewayProvisionResult**](../Model/GatewayGatewayProvisionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gatewayUpdateGatewayAttributes**
> \Swagger\Client\Model\GatewayUpdateGatewayAttributesResult gatewayUpdateGatewayAttributes($body)

Update gateway attributes

Update gateway attributes (name, ipAddress, on-premise parametrization and description) and associated site attributes  Privileges required:  `UPDATE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayUpdateGatewayAttributes(); // \Swagger\Client\Model\GatewayUpdateGatewayAttributes | 

try {
    $result = $apiInstance->gatewayUpdateGatewayAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->gatewayUpdateGatewayAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayUpdateGatewayAttributes**](../Model/GatewayUpdateGatewayAttributes.md)|  |

### Return type

[**\Swagger\Client\Model\GatewayUpdateGatewayAttributesResult**](../Model/GatewayUpdateGatewayAttributesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

