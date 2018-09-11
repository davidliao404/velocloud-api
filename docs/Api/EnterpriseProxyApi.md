# Swagger\Client\EnterpriseProxyApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseProxyGetEnterpriseProxyEdgeInventory**](EnterpriseProxyApi.md#enterpriseProxyGetEnterpriseProxyEdgeInventory) | **POST** /enterpriseProxy/getEnterpriseProxyEdgeInventory | Get a list of all partner enterprises and edge inventory associated with each enterprise
[**enterpriseProxyGetEnterpriseProxyEnterprises**](EnterpriseProxyApi.md#enterpriseProxyGetEnterpriseProxyEnterprises) | **POST** /enterpriseProxy/getEnterpriseProxyEnterprises | Get a list of all partner enterprises
[**enterpriseProxyGetEnterpriseProxyGatewayPools**](EnterpriseProxyApi.md#enterpriseProxyGetEnterpriseProxyGatewayPools) | **POST** /enterpriseProxy/getEnterpriseProxyGatewayPools | Get list of gateway pools
[**enterpriseProxyGetEnterpriseProxyOperatorProfiles**](EnterpriseProxyApi.md#enterpriseProxyGetEnterpriseProxyOperatorProfiles) | **POST** /enterpriseProxy/getEnterpriseProxyOperatorProfiles | Get the operator profiles associated with a partner
[**enterpriseProxyInsertEnterpriseProxyEnterprise**](EnterpriseProxyApi.md#enterpriseProxyInsertEnterpriseProxyEnterprise) | **POST** /enterpriseProxy/insertEnterpriseProxyEnterprise | Insert a new enterprise owned by an MSP


# **enterpriseProxyGetEnterpriseProxyEdgeInventory**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem[] enterpriseProxyGetEnterpriseProxyEdgeInventory($body)

Get a list of all partner enterprises and edge inventory associated with each enterprise

Get  partner enterprises and their edge inventory.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventory(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventory | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyEdgeInventory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseProxyApi->enterpriseProxyGetEnterpriseProxyEdgeInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventory**](../Model/EnterpriseProxyGetEnterpriseProxyEdgeInventory.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyEnterprises**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprisesResultItem[] enterpriseProxyGetEnterpriseProxyEnterprises($body)

Get a list of all partner enterprises

Get all partner enterprises, optionally including all edges or edge counts.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprises(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprises | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyEnterprises($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseProxyApi->enterpriseProxyGetEnterpriseProxyEnterprises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprises**](../Model/EnterpriseProxyGetEnterpriseProxyEnterprises.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprisesResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyEnterprisesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyGatewayPools**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPoolsResultItem[] enterpriseProxyGetEnterpriseProxyGatewayPools($body)

Get list of gateway pools

Get list of gateway pools associated with an enterprise proxy, optionally with lists of gateways or enterprises belonging to each pool.  Privileges required:  `READ` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPools(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPools | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyGatewayPools($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseProxyApi->enterpriseProxyGetEnterpriseProxyGatewayPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPools**](../Model/EnterpriseProxyGetEnterpriseProxyGatewayPools.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPoolsResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyGatewayPoolsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyOperatorProfiles**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem[] enterpriseProxyGetEnterpriseProxyOperatorProfiles($body)

Get the operator profiles associated with a partner

Get the operator profiles associated with a proxy (MSP), as assigned by the operator.  Privileges required:  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfiles(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfiles | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyOperatorProfiles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseProxyApi->enterpriseProxyGetEnterpriseProxyOperatorProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfiles**](../Model/EnterpriseProxyGetEnterpriseProxyOperatorProfiles.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyInsertEnterpriseProxyEnterprise**
> \Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterpriseResult enterpriseProxyInsertEnterpriseProxyEnterprise($body)

Insert a new enterprise owned by an MSP

Insert an enterprise owned by an MSP. Whereas the `insertEnterprise` method will create an enterprise in the global or network context with no MSP association, this method will create one owned by an MSP, as determined by the credentials of the caller.  Privileges required:  `CREATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterprise(); // \Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterprise | 

try {
    $result = $apiInstance->enterpriseProxyInsertEnterpriseProxyEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseProxyApi->enterpriseProxyInsertEnterpriseProxyEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterprise**](../Model/EnterpriseProxyInsertEnterpriseProxyEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterpriseResult**](../Model/EnterpriseProxyInsertEnterpriseProxyEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

