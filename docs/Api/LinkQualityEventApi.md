# Swagger\Client\LinkQualityEventApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkQualityEventGetLinkQualityEvents**](LinkQualityEventApi.md#linkQualityEventGetLinkQualityEvents) | **POST** /linkQualityEvent/getLinkQualityEvents | Get link quality data


# **linkQualityEventGetLinkQualityEvents**
> \Swagger\Client\Model\LinkQualityEventGetLinkQualityEventsResult linkQualityEventGetLinkQualityEvents($body)

Get link quality data

Returns link quality scores per link for a particular edge within a time interval. Rolls up link quality events to provide an aggregate score for the edge. Returns an empty array if no link quality events are available in the given timeframe.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LinkQualityEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LinkQualityEventGetLinkQualityEvents(); // \Swagger\Client\Model\LinkQualityEventGetLinkQualityEvents | 

try {
    $result = $apiInstance->linkQualityEventGetLinkQualityEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkQualityEventApi->linkQualityEventGetLinkQualityEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LinkQualityEventGetLinkQualityEvents**](../Model/LinkQualityEventGetLinkQualityEvents.md)|  |

### Return type

[**\Swagger\Client\Model\LinkQualityEventGetLinkQualityEventsResult**](../Model/LinkQualityEventGetLinkQualityEventsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

