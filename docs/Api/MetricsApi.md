# Swagger\Client\MetricsApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**metricsGetEdgeAppLinkMetrics**](MetricsApi.md#metricsGetEdgeAppLinkMetrics) | **POST** /metrics/getEdgeAppLinkMetrics | Get flow metric aggregate data by link
[**metricsGetEdgeAppLinkSeries**](MetricsApi.md#metricsGetEdgeAppLinkSeries) | **POST** /metrics/getEdgeAppLinkSeries | Get flow metric time series data by link
[**metricsGetEdgeAppMetrics**](MetricsApi.md#metricsGetEdgeAppMetrics) | **POST** /metrics/getEdgeAppMetrics | Get flow metric aggregate data by application
[**metricsGetEdgeAppSeries**](MetricsApi.md#metricsGetEdgeAppSeries) | **POST** /metrics/getEdgeAppSeries | Get flow metric time series data by application
[**metricsGetEdgeCategoryMetrics**](MetricsApi.md#metricsGetEdgeCategoryMetrics) | **POST** /metrics/getEdgeCategoryMetrics | Get flow metric aggregate data by application category
[**metricsGetEdgeCategorySeries**](MetricsApi.md#metricsGetEdgeCategorySeries) | **POST** /metrics/getEdgeCategorySeries | Get flow metric time series data by application category
[**metricsGetEdgeDestMetrics**](MetricsApi.md#metricsGetEdgeDestMetrics) | **POST** /metrics/getEdgeDestMetrics | Get flow metric aggregate data by destination
[**metricsGetEdgeDestSeries**](MetricsApi.md#metricsGetEdgeDestSeries) | **POST** /metrics/getEdgeDestSeries | Get flow metric time series data by destination
[**metricsGetEdgeDeviceMetrics**](MetricsApi.md#metricsGetEdgeDeviceMetrics) | **POST** /metrics/getEdgeDeviceMetrics | Get flow metric aggregate data by client device
[**metricsGetEdgeDeviceSeries**](MetricsApi.md#metricsGetEdgeDeviceSeries) | **POST** /metrics/getEdgeDeviceSeries | Get flow metric time series data by client device
[**metricsGetEdgeLinkMetrics**](MetricsApi.md#metricsGetEdgeLinkMetrics) | **POST** /metrics/getEdgeLinkMetrics | Get advanced flow metric aggregate data by link
[**metricsGetEdgeLinkSeries**](MetricsApi.md#metricsGetEdgeLinkSeries) | **POST** /metrics/getEdgeLinkSeries | Get advanced flow metric time series data by link
[**metricsGetEdgeOsMetrics**](MetricsApi.md#metricsGetEdgeOsMetrics) | **POST** /metrics/getEdgeOsMetrics | Get flow metric aggregate data by client OS
[**metricsGetEdgeOsSeries**](MetricsApi.md#metricsGetEdgeOsSeries) | **POST** /metrics/getEdgeOsSeries | Get flow metric time series data by client OS
[**metricsGetEdgeSegmentMetrics**](MetricsApi.md#metricsGetEdgeSegmentMetrics) | **POST** /metrics/getEdgeSegmentMetrics | Get flow metric aggregate data by segment Id
[**metricsGetEdgeSegmentSeries**](MetricsApi.md#metricsGetEdgeSegmentSeries) | **POST** /metrics/getEdgeSegmentSeries | Get flow metric time series data by segment id


# **metricsGetEdgeAppLinkMetrics**
> \Swagger\Client\Model\MetricsGetEdgeAppLinkMetricsResultItem[] metricsGetEdgeAppLinkMetrics($body)

Get flow metric aggregate data by link

Fetch flow metric summaries for the given time interval by link. On success, this method returns an array of flow data where each entry corresponds to a link on the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics(); // \Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeAppLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeAppLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics**](../Model/MetricsGetEdgeAppLinkMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeAppLinkMetricsResultItem[]**](../Model/MetricsGetEdgeAppLinkMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppLinkSeries**
> \Swagger\Client\Model\MetricsGetEdgeAppLinkSeriesResultItem[] metricsGetEdgeAppLinkSeries($body)

Get flow metric time series data by link

Fetch flow metric time series for the given time interval by link. On success, this method returns an array of flow data where each entry corresponds to a link on the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppLinkSeries(); // \Swagger\Client\Model\MetricsGetEdgeAppLinkSeries | 

try {
    $result = $apiInstance->metricsGetEdgeAppLinkSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeAppLinkSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppLinkSeries**](../Model/MetricsGetEdgeAppLinkSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeAppLinkSeriesResultItem[]**](../Model/MetricsGetEdgeAppLinkSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppMetrics**
> \Swagger\Client\Model\MetricsGetEdgeAppMetricsResultItem[] metricsGetEdgeAppMetrics($body)

Get flow metric aggregate data by application

Fetch flow metric summaries for the given time interval by application. On success, this method returns an array of flow data where each entry corresponds to a single application. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppMetrics(); // \Swagger\Client\Model\MetricsGetEdgeAppMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeAppMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeAppMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppMetrics**](../Model/MetricsGetEdgeAppMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeAppMetricsResultItem[]**](../Model/MetricsGetEdgeAppMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppSeries**
> \Swagger\Client\Model\MetricsGetEdgeAppSeriesResultItem[] metricsGetEdgeAppSeries($body)

Get flow metric time series data by application

Fetch flow metric time series for the given time interval by application. On success, this method returns an array of flow data where each entry corresponds to a single application. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppSeries(); // \Swagger\Client\Model\MetricsGetEdgeAppSeries | 

try {
    $result = $apiInstance->metricsGetEdgeAppSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeAppSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppSeries**](../Model/MetricsGetEdgeAppSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeAppSeriesResultItem[]**](../Model/MetricsGetEdgeAppSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeCategoryMetrics**
> \Swagger\Client\Model\MetricsGetEdgeCategoryMetricsResultItem[] metricsGetEdgeCategoryMetrics($body)

Get flow metric aggregate data by application category

Fetch flow metric summaries for the given time interval by application category. On success, this method returns an array of flow data where each entry corresponds to a category of application traffic that has traversed the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeCategoryMetrics(); // \Swagger\Client\Model\MetricsGetEdgeCategoryMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeCategoryMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeCategoryMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeCategoryMetrics**](../Model/MetricsGetEdgeCategoryMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeCategoryMetricsResultItem[]**](../Model/MetricsGetEdgeCategoryMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeCategorySeries**
> \Swagger\Client\Model\MetricsGetEdgeCategorySeriesResultItem[] metricsGetEdgeCategorySeries($body)

Get flow metric time series data by application category

Fetch flow metric time series for the given time interval by application category. On success, this method returns an array of flow data where each entry corresponds to a category of application traffic that has traversed the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeCategorySeries(); // \Swagger\Client\Model\MetricsGetEdgeCategorySeries | 

try {
    $result = $apiInstance->metricsGetEdgeCategorySeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeCategorySeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeCategorySeries**](../Model/MetricsGetEdgeCategorySeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeCategorySeriesResultItem[]**](../Model/MetricsGetEdgeCategorySeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeDestMetrics**
> \Swagger\Client\Model\MetricsGetEdgeDestMetricsResultItem[] metricsGetEdgeDestMetrics($body)

Get flow metric aggregate data by destination

Fetch flow metric summaries for the given time interval by destination. On success, this method returns an array of flow data where each entry corresponds to a distinct traffic destination. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeDestMetrics(); // \Swagger\Client\Model\MetricsGetEdgeDestMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeDestMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeDestMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeDestMetrics**](../Model/MetricsGetEdgeDestMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeDestMetricsResultItem[]**](../Model/MetricsGetEdgeDestMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeDestSeries**
> \Swagger\Client\Model\MetricsGetEdgeDestSeriesResultItem[] metricsGetEdgeDestSeries($body)

Get flow metric time series data by destination

Fetch flow metric time series for the given time interval by destination. On success, this method returns an array of flow data where each entry corresponds to a distinct traffic destination. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeDestSeries(); // \Swagger\Client\Model\MetricsGetEdgeDestSeries | 

try {
    $result = $apiInstance->metricsGetEdgeDestSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeDestSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeDestSeries**](../Model/MetricsGetEdgeDestSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeDestSeriesResultItem[]**](../Model/MetricsGetEdgeDestSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeDeviceMetrics**
> \Swagger\Client\Model\MetricsGetEdgeDeviceMetricsResultItem[] metricsGetEdgeDeviceMetrics($body)

Get flow metric aggregate data by client device

Fetch flow metric summaries for the given time interval by client device. On success, this method returns an array of flow data where each entry corresponds to a distinct device. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_USER_IDENTIFIABLE_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeDeviceMetrics(); // \Swagger\Client\Model\MetricsGetEdgeDeviceMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeDeviceMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeDeviceMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeDeviceMetrics**](../Model/MetricsGetEdgeDeviceMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeDeviceMetricsResultItem[]**](../Model/MetricsGetEdgeDeviceMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeDeviceSeries**
> \Swagger\Client\Model\MetricsGetEdgeDeviceSeriesResultItem[] metricsGetEdgeDeviceSeries($body)

Get flow metric time series data by client device

Fetch flow metric time series for the given time interval by client device. On success, this method returns an array of flow data where each entry corresponds to a distinct device. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_USER_IDENTIFIABLE_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeDeviceSeries(); // \Swagger\Client\Model\MetricsGetEdgeDeviceSeries | 

try {
    $result = $apiInstance->metricsGetEdgeDeviceSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeDeviceSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeDeviceSeries**](../Model/MetricsGetEdgeDeviceSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeDeviceSeriesResultItem[]**](../Model/MetricsGetEdgeDeviceSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeLinkMetrics**
> \Swagger\Client\Model\MetricsGetEdgeLinkMetricsResultItem[] metricsGetEdgeLinkMetrics($body)

Get advanced flow metric aggregate data by link

Fetch advanced flow metric summaries for the given time interval by link. On success, this method returns an array of flow data where each entry corresponds to a link on the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeLinkMetrics(); // \Swagger\Client\Model\MetricsGetEdgeLinkMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeLinkMetrics**](../Model/MetricsGetEdgeLinkMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeLinkMetricsResultItem[]**](../Model/MetricsGetEdgeLinkMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeLinkSeries**
> \Swagger\Client\Model\MetricsGetEdgeLinkSeriesResultItem[] metricsGetEdgeLinkSeries($body)

Get advanced flow metric time series data by link

Fetch advanced flow metric time series for the given time interval by link. On success, this method returns an array of flow data where each entry corresponds to a link on the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeLinkSeries(); // \Swagger\Client\Model\MetricsGetEdgeLinkSeries | 

try {
    $result = $apiInstance->metricsGetEdgeLinkSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeLinkSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeLinkSeries**](../Model/MetricsGetEdgeLinkSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeLinkSeriesResultItem[]**](../Model/MetricsGetEdgeLinkSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeOsMetrics**
> \Swagger\Client\Model\MetricsGetEdgeOsMetricsResultItem[] metricsGetEdgeOsMetrics($body)

Get flow metric aggregate data by client OS

Fetch flow metric summaries for the given time interval by client OS. On success, this method returns an array of flow data where each entry corresponds to a distinct OS on a client device. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeOsMetrics(); // \Swagger\Client\Model\MetricsGetEdgeOsMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeOsMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeOsMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeOsMetrics**](../Model/MetricsGetEdgeOsMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeOsMetricsResultItem[]**](../Model/MetricsGetEdgeOsMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeOsSeries**
> \Swagger\Client\Model\MetricsGetEdgeOsSeriesResultItem[] metricsGetEdgeOsSeries($body)

Get flow metric time series data by client OS

Fetch flow metric time series for the given time interval by client OS. On success, this method returns an array of flow data where each entry corresponds to a distinct OS on a client device. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeOsSeries(); // \Swagger\Client\Model\MetricsGetEdgeOsSeries | 

try {
    $result = $apiInstance->metricsGetEdgeOsSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeOsSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeOsSeries**](../Model/MetricsGetEdgeOsSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeOsSeriesResultItem[]**](../Model/MetricsGetEdgeOsSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeSegmentMetrics**
> \Swagger\Client\Model\MetricsGetEdgeSegmentMetricsResultItem[] metricsGetEdgeSegmentMetrics($body)

Get flow metric aggregate data by segment Id

Fetch flow metric summaries for the given time interval by segment id. On success, this method returns an array of flow data where each entry corresponds to a segment id traffic that has traversed the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeSegmentMetrics(); // \Swagger\Client\Model\MetricsGetEdgeSegmentMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeSegmentMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeSegmentMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeSegmentMetrics**](../Model/MetricsGetEdgeSegmentMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeSegmentMetricsResultItem[]**](../Model/MetricsGetEdgeSegmentMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeSegmentSeries**
> \Swagger\Client\Model\MetricsGetEdgeSegmentSeriesResultItem[] metricsGetEdgeSegmentSeries($body)

Get flow metric time series data by segment id

Fetch flow metric time series for the given time interval by segment id. On success, this method returns an array of flow data where each entry corresponds to a segment id of traffic that has traversed the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeSegmentSeries(); // \Swagger\Client\Model\MetricsGetEdgeSegmentSeries | 

try {
    $result = $apiInstance->metricsGetEdgeSegmentSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeSegmentSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeSegmentSeries**](../Model/MetricsGetEdgeSegmentSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeSegmentSeriesResultItem[]**](../Model/MetricsGetEdgeSegmentSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

