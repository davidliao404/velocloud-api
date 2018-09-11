# Swagger\Client\MonitoringApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**monitoringGetAggregateEdgeLinkMetrics**](MonitoringApi.md#monitoringGetAggregateEdgeLinkMetrics) | **POST** /monitoring/getAggregateEdgeLinkMetrics | Get aggregated edge link metrics across enterprises
[**monitoringGetAggregateEnterpriseEvents**](MonitoringApi.md#monitoringGetAggregateEnterpriseEvents) | **POST** /monitoring/getAggregateEnterpriseEvents | Fetch all enterprise events
[**monitoringGetAggregates**](MonitoringApi.md#monitoringGetAggregates) | **POST** /monitoring/getAggregates | Get aggregate enterprise and edge information
[**monitoringGetEnterpriseBgpPeerStatus**](MonitoringApi.md#monitoringGetEnterpriseBgpPeerStatus) | **POST** /monitoring/getEnterpriseBgpPeerStatus | Get gateway BGP peer status for all enterprise gateways
[**monitoringGetEnterpriseEdgeBgpPeerStatus**](MonitoringApi.md#monitoringGetEnterpriseEdgeBgpPeerStatus) | **POST** /monitoring/getEnterpriseEdgeBgpPeerStatus | Get edge BGP peer status for all enterprise edges
[**monitoringGetEnterpriseEdgeLinkStatus**](MonitoringApi.md#monitoringGetEnterpriseEdgeLinkStatus) | **POST** /monitoring/getEnterpriseEdgeLinkStatus | Get edge and link status data


# **monitoringGetAggregateEdgeLinkMetrics**
> \Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetricsResultItem[] monitoringGetAggregateEdgeLinkMetrics($body)

Get aggregated edge link metrics across enterprises

Get aggregate edge link metrics across enterprises. On success, returns an array of network utilization metrics, one per link.  Privileges required:  `READ` `ENTERPRISE`  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetrics(); // \Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetrics | 

try {
    $result = $apiInstance->monitoringGetAggregateEdgeLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetAggregateEdgeLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetrics**](../Model/MonitoringGetAggregateEdgeLinkMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetricsResultItem[]**](../Model/MonitoringGetAggregateEdgeLinkMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetAggregateEnterpriseEvents**
> \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEventsResult monitoringGetAggregateEnterpriseEvents($body)

Fetch all enterprise events

Fetch all events across all enterprises in a paginated list. When called in the MSP/Partner context, only enterprises managed by the MSP are queried.  Privileges required:  `READ` `ENTERPRISE`  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents(); // \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents | 

try {
    $result = $apiInstance->monitoringGetAggregateEnterpriseEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetAggregateEnterpriseEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents**](../Model/MonitoringGetAggregateEnterpriseEvents.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetAggregateEnterpriseEventsResult**](../Model/MonitoringGetAggregateEnterpriseEventsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetAggregates**
> \Swagger\Client\Model\MonitoringGetAggregatesResult monitoringGetAggregates($body)

Get aggregate enterprise and edge information

Retrieve a comprehensive listing of all enterprises and edges on a network. Returns an object containing an aggregate `edgeCount`, a list (`enterprises`) containing enterprise objects, and a map (`edges`) which gives edge counts per enterprise.  Privileges required:  `READ` `ENTERPRISE`  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregates(); // \Swagger\Client\Model\MonitoringGetAggregates | 

try {
    $result = $apiInstance->monitoringGetAggregates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetAggregates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MonitoringGetAggregates**](../Model/MonitoringGetAggregates.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetAggregatesResult**](../Model/MonitoringGetAggregatesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEnterpriseBgpPeerStatus**
> \Swagger\Client\Model\MonitoringGetEnterpriseBgpPeerStatusResultItem[] monitoringGetEnterpriseBgpPeerStatus($body)

Get gateway BGP peer status for all enterprise gateways

Returns an array where each entry corresponds to a gateway and contains an associated set of BGP peers with state records.  Privileges required:  `READ` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->monitoringGetEnterpriseBgpPeerStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetEnterpriseBgpPeerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetEnterpriseBgpPeerStatusResultItem[]**](../Model/MonitoringGetEnterpriseBgpPeerStatusResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEnterpriseEdgeBgpPeerStatus**
> \Swagger\Client\Model\MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem[] monitoringGetEnterpriseEdgeBgpPeerStatus($body)

Get edge BGP peer status for all enterprise edges

Returns an array where each entry corresponds to an edge and contains an associated set of BGP peers and state records.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $apiInstance->monitoringGetEnterpriseEdgeBgpPeerStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetEnterpriseEdgeBgpPeerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem[]**](../Model/MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEnterpriseEdgeLinkStatus**
> \Swagger\Client\Model\MonitoringGetEnterpriseEdgeLinkStatusResultItem[] monitoringGetEnterpriseEdgeLinkStatus($body)

Get edge and link status data

Get current edge and edge-link status for all enterprise edges.  Privileges required:  `READ` `ENTERPRISE`  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $result = $apiInstance->monitoringGetEnterpriseEdgeLinkStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetEnterpriseEdgeLinkStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetEnterpriseEdgeLinkStatusResultItem[]**](../Model/MonitoringGetEnterpriseEdgeLinkStatusResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

