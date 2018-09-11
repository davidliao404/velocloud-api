# Swagger\Client\SystemPropertyApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemPropertyGetSystemProperty**](SystemPropertyApi.md#systemPropertyGetSystemProperty) | **POST** /systemProperty/getSystemProperty | Get system property
[**systemPropertyInsertOrUpdateSystemProperty**](SystemPropertyApi.md#systemPropertyInsertOrUpdateSystemProperty) | **POST** /systemProperty/insertOrUpdateSystemProperty | Insert or update a system property
[**systemPropertyInsertSystemProperty**](SystemPropertyApi.md#systemPropertyInsertSystemProperty) | **POST** /systemProperty/insertSystemProperty | Insert a system property
[**systemPropertyUpdateSystemProperty**](SystemPropertyApi.md#systemPropertyUpdateSystemProperty) | **POST** /systemProperty/updateSystemProperty | Update a system property


# **systemPropertyGetSystemProperty**
> \Swagger\Client\Model\SystemPropertyGetSystemPropertyResult systemPropertyGetSystemProperty($body)

Get system property

Get a system property by object id or other attribute.  Privileges required:  `READ` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemPropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyGetSystemProperty(); // \Swagger\Client\Model\SystemPropertyGetSystemProperty | 

try {
    $result = $apiInstance->systemPropertyGetSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPropertyApi->systemPropertyGetSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyGetSystemProperty**](../Model/SystemPropertyGetSystemProperty.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyGetSystemPropertyResult**](../Model/SystemPropertyGetSystemPropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyInsertOrUpdateSystemProperty**
> \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemPropertyResult systemPropertyInsertOrUpdateSystemProperty($body)

Insert or update a system property

Insert a system property. If property with the given name already exists, the property will be updated.  Privileges required:  `CREATE` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemPropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty(); // \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty | 

try {
    $result = $apiInstance->systemPropertyInsertOrUpdateSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPropertyApi->systemPropertyInsertOrUpdateSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty**](../Model/SystemPropertyInsertOrUpdateSystemProperty.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemPropertyResult**](../Model/SystemPropertyInsertOrUpdateSystemPropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyInsertSystemProperty**
> \Swagger\Client\Model\SystemPropertyInsertSystemPropertyResult systemPropertyInsertSystemProperty($body)

Insert a system property

Insert a new system property.  Privileges required:  `CREATE` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemPropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyInsertSystemProperty(); // \Swagger\Client\Model\SystemPropertyInsertSystemProperty | 

try {
    $result = $apiInstance->systemPropertyInsertSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPropertyApi->systemPropertyInsertSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyInsertSystemProperty**](../Model/SystemPropertyInsertSystemProperty.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyInsertSystemPropertyResult**](../Model/SystemPropertyInsertSystemPropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyUpdateSystemProperty**
> \Swagger\Client\Model\SystemPropertyUpdateSystemPropertyResult systemPropertyUpdateSystemProperty($body)

Update a system property

Update an existing system property, provided an object `id` or other identifying attributes  Privileges required:  `UPDATE` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemPropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyUpdateSystemProperty(); // \Swagger\Client\Model\SystemPropertyUpdateSystemProperty | 

try {
    $result = $apiInstance->systemPropertyUpdateSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPropertyApi->systemPropertyUpdateSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyUpdateSystemProperty**](../Model/SystemPropertyUpdateSystemProperty.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyUpdateSystemPropertyResult**](../Model/SystemPropertyUpdateSystemPropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

