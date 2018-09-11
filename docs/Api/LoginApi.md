# Swagger\Client\LoginApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginEnterpriseLogin**](LoginApi.md#loginEnterpriseLogin) | **POST** /login/enterpriseLogin | Authentication for non-operator users
[**loginOperatorLogin**](LoginApi.md#loginOperatorLogin) | **POST** /login/operatorLogin | Authentication for an operator user
[**logout**](LoginApi.md#logout) | **POST** /logout | Deactivate a given authorization cookie


# **loginEnterpriseLogin**
> loginEnterpriseLogin($authorization)

Authentication for non-operator users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = new \Swagger\Client\Model\AuthObject(); // \Swagger\Client\Model\AuthObject | 

try {
    $apiInstance->loginEnterpriseLogin($authorization);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginEnterpriseLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**\Swagger\Client\Model\AuthObject**](../Model/AuthObject.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginOperatorLogin**
> loginOperatorLogin($authorization)

Authentication for an operator user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = new \Swagger\Client\Model\AuthObject(); // \Swagger\Client\Model\AuthObject | 

try {
    $apiInstance->loginOperatorLogin($authorization);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginOperatorLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**\Swagger\Client\Model\AuthObject**](../Model/AuthObject.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> logout()

Deactivate a given authorization cookie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->logout();
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

