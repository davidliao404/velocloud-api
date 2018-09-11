# Swagger\Client\EventApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventGetEnterpriseEvents**](EventApi.md#eventGetEnterpriseEvents) | **POST** /event/getEnterpriseEvents | Fetch edge events
[**eventGetOperatorEvents**](EventApi.md#eventGetOperatorEvents) | **POST** /event/getOperatorEvents | Fetch operator events


# **eventGetEnterpriseEvents**
> \Swagger\Client\Model\EventGetEnterpriseEventsResult eventGetEnterpriseEvents($body)

Fetch edge events

Fetch edge events in an enterprise or edge context, returns an array of filters and sorted edge events.  Privileges required:  `READ` `ENTERPRISE_EVENT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EventGetEnterpriseEvents(); // \Swagger\Client\Model\EventGetEnterpriseEvents | 

try {
    $result = $apiInstance->eventGetEnterpriseEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventGetEnterpriseEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EventGetEnterpriseEvents**](../Model/EventGetEnterpriseEvents.md)|  |

### Return type

[**\Swagger\Client\Model\EventGetEnterpriseEventsResult**](../Model/EventGetEnterpriseEventsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventGetOperatorEvents**
> \Swagger\Client\Model\EventGetOperatorEventsResult eventGetOperatorEvents($body)

Fetch operator events

Fetch Operator Events by network ID (optional, if not specified will be taken for the callers security context). Optionally, a filter object can be used to limit the number of events returned. Additionally, a time interval can be specified with an interval object. If no end date is given, it will default to the current date. Gateway ID can be supplied to filter events to those from a specific gateway.  Privileges required:  `READ` `OPERATOR_EVENT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EventGetOperatorEvents(); // \Swagger\Client\Model\EventGetOperatorEvents | 

try {
    $result = $apiInstance->eventGetOperatorEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventGetOperatorEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EventGetOperatorEvents**](../Model/EventGetOperatorEvents.md)|  |

### Return type

[**\Swagger\Client\Model\EventGetOperatorEventsResult**](../Model/EventGetOperatorEventsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

