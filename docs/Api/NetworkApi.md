# Swagger\Client\NetworkApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**networkDeleteNetworkGatewayPool**](NetworkApi.md#networkDeleteNetworkGatewayPool) | **POST** /network/deleteNetworkGatewayPool | Delete a gateway pool
[**networkGetNetworkConfigurations**](NetworkApi.md#networkGetNetworkConfigurations) | **POST** /network/getNetworkConfigurations | Get operator configuration profiles
[**networkGetNetworkEnterprises**](NetworkApi.md#networkGetNetworkEnterprises) | **POST** /network/getNetworkEnterprises | Get a list of the enterprises on a network
[**networkGetNetworkGatewayPools**](NetworkApi.md#networkGetNetworkGatewayPools) | **POST** /network/getNetworkGatewayPools | Get list of gateway pools
[**networkGetNetworkGateways**](NetworkApi.md#networkGetNetworkGateways) | **POST** /network/getNetworkGateways | Get list of gateways
[**networkGetNetworkOperatorUsers**](NetworkApi.md#networkGetNetworkOperatorUsers) | **POST** /network/getNetworkOperatorUsers | Get list of operator users for a network
[**networkInsertNetworkGatewayPool**](NetworkApi.md#networkInsertNetworkGatewayPool) | **POST** /network/insertNetworkGatewayPool | Insert a gateway pool
[**networkUpdateNetworkGatewayPoolAttributes**](NetworkApi.md#networkUpdateNetworkGatewayPoolAttributes) | **POST** /network/updateNetworkGatwayPoolAttributes | Update gateway pool attributes


# **networkDeleteNetworkGatewayPool**
> \Swagger\Client\Model\NetworkDeleteNetworkGatewayPoolResult networkDeleteNetworkGatewayPool($body)

Delete a gateway pool

Delete a gateway pool, and it's component gateways, by pool id.  Privileges required:  `DELETE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkDeleteNetworkGatewayPool(); // \Swagger\Client\Model\NetworkDeleteNetworkGatewayPool | 

try {
    $result = $apiInstance->networkDeleteNetworkGatewayPool($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkDeleteNetworkGatewayPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkDeleteNetworkGatewayPool**](../Model/NetworkDeleteNetworkGatewayPool.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkDeleteNetworkGatewayPoolResult**](../Model/NetworkDeleteNetworkGatewayPoolResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkConfigurations**
> \Swagger\Client\Model\NetworkGetNetworkConfigurationsResultItem[] networkGetNetworkConfigurations($body)

Get operator configuration profiles

Get the configuration profiles associated with an operator's network, optionally including the modules associated with each profile. Templates are not returned from this call.  Privileges required:  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkConfigurations(); // \Swagger\Client\Model\NetworkGetNetworkConfigurations | 

try {
    $result = $apiInstance->networkGetNetworkConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkGetNetworkConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkConfigurations**](../Model/NetworkGetNetworkConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkConfigurationsResultItem[]**](../Model/NetworkGetNetworkConfigurationsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkEnterprises**
> \Swagger\Client\Model\NetworkGetNetworkEnterprisesResultItem[] networkGetNetworkEnterprises($body)

Get a list of the enterprises on a network

Get the enterprises existing on a network, optionally including all edges or edge counts. The `edgeConfigUpdate` \"with\" option may also be passed to check whether application of configuration updates to edges is enabled for each enterprise.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkEnterprises(); // \Swagger\Client\Model\NetworkGetNetworkEnterprises | 

try {
    $result = $apiInstance->networkGetNetworkEnterprises($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkGetNetworkEnterprises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkEnterprises**](../Model/NetworkGetNetworkEnterprises.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkEnterprisesResultItem[]**](../Model/NetworkGetNetworkEnterprisesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkGatewayPools**
> \Swagger\Client\Model\NetworkGetNetworkGatewayPoolsResultItem[] networkGetNetworkGatewayPools($body)

Get list of gateway pools

Get list of gateway pools associated with a network, optionally with the gateways or enterprises belonging to each pool.  Privileges required:  `READ` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkGatewayPools(); // \Swagger\Client\Model\NetworkGetNetworkGatewayPools | 

try {
    $result = $apiInstance->networkGetNetworkGatewayPools($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkGetNetworkGatewayPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkGatewayPools**](../Model/NetworkGetNetworkGatewayPools.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkGatewayPoolsResultItem[]**](../Model/NetworkGetNetworkGatewayPoolsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkGateways**
> \Swagger\Client\Model\NetworkGetNetworkGatewaysResultItem[] networkGetNetworkGateways($body)

Get list of gateways

Get list of gateways associated with a network.  Privileges required:  `READ` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkGateways(); // \Swagger\Client\Model\NetworkGetNetworkGateways | 

try {
    $result = $apiInstance->networkGetNetworkGateways($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkGetNetworkGateways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkGateways**](../Model/NetworkGetNetworkGateways.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkGatewaysResultItem[]**](../Model/NetworkGetNetworkGatewaysResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkOperatorUsers**
> \Swagger\Client\Model\NetworkGetNetworkOperatorUsersResultItem[] networkGetNetworkOperatorUsers($body)

Get list of operator users for a network

Get a list of all of the operator users associated with a network  Privileges required:  `READ` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkOperatorUsers(); // \Swagger\Client\Model\NetworkGetNetworkOperatorUsers | 

try {
    $result = $apiInstance->networkGetNetworkOperatorUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkGetNetworkOperatorUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkOperatorUsers**](../Model/NetworkGetNetworkOperatorUsers.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkOperatorUsersResultItem[]**](../Model/NetworkGetNetworkOperatorUsersResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkInsertNetworkGatewayPool**
> \Swagger\Client\Model\NetworkInsertNetworkGatewayPoolResult networkInsertNetworkGatewayPool($body)

Insert a gateway pool

Insert a gateway pool, associated with a network.  Privileges required:  `CREATE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkInsertNetworkGatewayPool(); // \Swagger\Client\Model\NetworkInsertNetworkGatewayPool | 

try {
    $result = $apiInstance->networkInsertNetworkGatewayPool($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkInsertNetworkGatewayPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkInsertNetworkGatewayPool**](../Model/NetworkInsertNetworkGatewayPool.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkInsertNetworkGatewayPoolResult**](../Model/NetworkInsertNetworkGatewayPoolResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkUpdateNetworkGatewayPoolAttributes**
> \Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributesResult networkUpdateNetworkGatewayPoolAttributes($body)

Update gateway pool attributes

Update the configurable attributes of a Gateway Pool. Configurarable attributes are `name`, `description`, and `handOffType`.  Privileges required:  `UPDATE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes(); // \Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes | 

try {
    $result = $apiInstance->networkUpdateNetworkGatewayPoolAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkUpdateNetworkGatewayPoolAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes**](../Model/NetworkUpdateNetworkGatewayPoolAttributes.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributesResult**](../Model/NetworkUpdateNetworkGatewayPoolAttributesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

