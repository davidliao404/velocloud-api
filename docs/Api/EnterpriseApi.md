# Swagger\Client\EnterpriseApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseDeleteEnterprise**](EnterpriseApi.md#enterpriseDeleteEnterprise) | **POST** /enterprise/deleteEnterprise | Delete an enterprise
[**enterpriseDeleteEnterpriseGatewayRecords**](EnterpriseApi.md#enterpriseDeleteEnterpriseGatewayRecords) | **POST** /enterprise/deleteEnterpriseGatewayRecords | Delete enterprise gateway record(s)
[**enterpriseDeleteEnterpriseNetworkAllocation**](EnterpriseApi.md#enterpriseDeleteEnterpriseNetworkAllocation) | **POST** /enterprise/deleteEnterpriseNetworkAllocation | Delete an enterprise network allocation
[**enterpriseDeleteEnterpriseService**](EnterpriseApi.md#enterpriseDeleteEnterpriseService) | **POST** /enterprise/deleteEnterpriseService | Delete an enterprise service
[**enterpriseGetEnterprise**](EnterpriseApi.md#enterpriseGetEnterprise) | **POST** /enterprise/getEnterprise | Get enterprise
[**enterpriseGetEnterpriseAddresses**](EnterpriseApi.md#enterpriseGetEnterpriseAddresses) | **POST** /enterprise/getEnterpriseAddresses | Get enterprise IP address information
[**enterpriseGetEnterpriseAlertConfigurations**](EnterpriseApi.md#enterpriseGetEnterpriseAlertConfigurations) | **POST** /enterprise/getEnterpriseAlertConfigurations | Get the enterprise alert configuration
[**enterpriseGetEnterpriseAlerts**](EnterpriseApi.md#enterpriseGetEnterpriseAlerts) | **POST** /enterprise/getEnterpriseAlerts | Get a list of the alerts triggered for the enterprise
[**enterpriseGetEnterpriseAllAlertRecipients**](EnterpriseApi.md#enterpriseGetEnterpriseAllAlertRecipients) | **POST** /enterprise/getEnterpriseAllAlertsRecipients | List recipients currently receiving ALL enterprise alerts
[**enterpriseGetEnterpriseCapabilities**](EnterpriseApi.md#enterpriseGetEnterpriseCapabilities) | **POST** /enterprise/getEnterpriseCapabilities | Get enterprise capabilities
[**enterpriseGetEnterpriseConfigurations**](EnterpriseApi.md#enterpriseGetEnterpriseConfigurations) | **POST** /enterprise/getEnterpriseConfigurations | Get enterprise configuration profiles
[**enterpriseGetEnterpriseEdges**](EnterpriseApi.md#enterpriseGetEnterpriseEdges) | **POST** /enterprise/getEnterpriseEdges | Get edges associated with an enterprise
[**enterpriseGetEnterpriseGatewayHandoff**](EnterpriseApi.md#enterpriseGetEnterpriseGatewayHandoff) | **POST** /enterprise/getEnterpriseGatewayHandoff | Get enterprise gateway handoff configuration
[**enterpriseGetEnterpriseNetworkAllocation**](EnterpriseApi.md#enterpriseGetEnterpriseNetworkAllocation) | **POST** /enterprise/getEnterpriseNetworkAllocation | Get an enterprise network allocation
[**enterpriseGetEnterpriseNetworkAllocations**](EnterpriseApi.md#enterpriseGetEnterpriseNetworkAllocations) | **POST** /enterprise/getEnterpriseNetworkAllocations | Get all network allocation objects defined on an enterprise
[**enterpriseGetEnterpriseRouteConfiguration**](EnterpriseApi.md#enterpriseGetEnterpriseRouteConfiguration) | **POST** /enterprise/getEnterpriseRouteConfiguration | Get route advertisement and routing preferences policy
[**enterpriseGetEnterpriseRouteTable**](EnterpriseApi.md#enterpriseGetEnterpriseRouteTable) | **POST** /enterprise/getEnterpriseRouteTable | Get the enterprise route table
[**enterpriseGetEnterpriseServices**](EnterpriseApi.md#enterpriseGetEnterpriseServices) | **POST** /enterprise/getEnterpriseServices | Get enterprise network service detail
[**enterpriseInsertEnterprise**](EnterpriseApi.md#enterpriseInsertEnterprise) | **POST** /enterprise/insertEnterprise | Insert a new enterprise
[**enterpriseInsertEnterpriseNetworkAllocation**](EnterpriseApi.md#enterpriseInsertEnterpriseNetworkAllocation) | **POST** /enterprise/insertEnterpriseNetworkAllocation | Insert an enterprise network allocation
[**enterpriseInsertEnterpriseService**](EnterpriseApi.md#enterpriseInsertEnterpriseService) | **POST** /enterprise/insertEnterpriseService | Insert a new enterprise service
[**enterpriseInsertOrUpdateEnterpriseAlertConfigurations**](EnterpriseApi.md#enterpriseInsertOrUpdateEnterpriseAlertConfigurations) | **POST** /enterprise/insertOrUpdateEnterpriseAlertConfigurations | Insert, update, or delete enterprise alert configurations
[**enterpriseInsertOrUpdateEnterpriseCapability**](EnterpriseApi.md#enterpriseInsertOrUpdateEnterpriseCapability) | **POST** /enterprise/insertOrUpdateEnterpriseCapability | Insert or update an enterprise capability
[**enterpriseInsertOrUpdateEnterpriseGatewayHandoff**](EnterpriseApi.md#enterpriseInsertOrUpdateEnterpriseGatewayHandoff) | **POST** /enterprise/insertOrUpdateEnterpriseGatewayHandoff | Insert or update an enterprise gateway handoff configuration
[**enterpriseSetEnterpriseAllAlertRecipients**](EnterpriseApi.md#enterpriseSetEnterpriseAllAlertRecipients) | **POST** /enterprise/setEnterpriseAllAlertsRecipients | Set the recipients who should receive all alerts for an enterprise
[**enterpriseUpdateEnterprise**](EnterpriseApi.md#enterpriseUpdateEnterprise) | **POST** /enterprise/updateEnterprise | Update an enterprise
[**enterpriseUpdateEnterpriseNetworkAllocation**](EnterpriseApi.md#enterpriseUpdateEnterpriseNetworkAllocation) | **POST** /enterprise/updateEnterpriseNetworkAllocation | Update an enterprise network allocation
[**enterpriseUpdateEnterpriseRoute**](EnterpriseApi.md#enterpriseUpdateEnterpriseRoute) | **POST** /enterprise/updateEnterpriseRoute | Update an enterprise route
[**enterpriseUpdateEnterpriseRouteConfiguration**](EnterpriseApi.md#enterpriseUpdateEnterpriseRouteConfiguration) | **POST** /enterprise/updateEnterpriseRouteConfiguration | Update enterprise routing configuration
[**enterpriseUpdateEnterpriseSecurityPolicy**](EnterpriseApi.md#enterpriseUpdateEnterpriseSecurityPolicy) | **POST** /enterprise/updateEnterpriseSecurityPolicy | Update enterprise security policy
[**enterpriseUpdateEnterpriseService**](EnterpriseApi.md#enterpriseUpdateEnterpriseService) | **POST** /enterprise/updateEnterpriseService | Update an enterprise service


# **enterpriseDeleteEnterprise**
> \Swagger\Client\Model\EnterpriseDeleteEnterpriseResult enterpriseDeleteEnterprise($body)

Delete an enterprise

Delete the enterprise specified by the given id parameter. enterpriseId is also a valid alias for id.  Privileges required:  `DELETE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterprise(); // \Swagger\Client\Model\EnterpriseDeleteEnterprise | 

try {
    $result = $apiInstance->enterpriseDeleteEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseDeleteEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterprise**](../Model/EnterpriseDeleteEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseDeleteEnterpriseResult**](../Model/EnterpriseDeleteEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterpriseGatewayRecords**
> \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecordsResult enterpriseDeleteEnterpriseGatewayRecords($body)

Delete enterprise gateway record(s)

Delete the enterprise gateway record(s) matching the given gateway id(s) and neighbor IP addresses.  Privileges required:  `DELETE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords(); // \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords | 

try {
    $result = $apiInstance->enterpriseDeleteEnterpriseGatewayRecords($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseDeleteEnterpriseGatewayRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords**](../Model/EnterpriseDeleteEnterpriseGatewayRecords.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecordsResult**](../Model/EnterpriseDeleteEnterpriseGatewayRecordsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterpriseNetworkAllocation**
> \Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocationResult enterpriseDeleteEnterpriseNetworkAllocation($body)

Delete an enterprise network allocation

Delete an enterprise network allocation, by id.  Privileges required:  `DELETE` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseDeleteEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseDeleteEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocation**](../Model/EnterpriseDeleteEnterpriseNetworkAllocation.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocationResult**](../Model/EnterpriseDeleteEnterpriseNetworkAllocationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterpriseService**
> \Swagger\Client\Model\EnterpriseDeleteEnterpriseServiceResult enterpriseDeleteEnterpriseService($body)

Delete an enterprise service

Delete an enterprise service, by id.  Privileges required:  `DELETE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterpriseService(); // \Swagger\Client\Model\EnterpriseDeleteEnterpriseService | 

try {
    $result = $apiInstance->enterpriseDeleteEnterpriseService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseDeleteEnterpriseService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterpriseService**](../Model/EnterpriseDeleteEnterpriseService.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseDeleteEnterpriseServiceResult**](../Model/EnterpriseDeleteEnterpriseServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterprise**
> \Swagger\Client\Model\EnterpriseGetEnterpriseResult enterpriseGetEnterprise($body)

Get enterprise

Retrieve enterprise data, with optional proxy (partner) detail.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterprise(); // \Swagger\Client\Model\EnterpriseGetEnterprise | 

try {
    $result = $apiInstance->enterpriseGetEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterprise**](../Model/EnterpriseGetEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseResult**](../Model/EnterpriseGetEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseAddresses**
> \Swagger\Client\Model\EnterpriseGetEnterpriseAddressesResultItem[] enterpriseGetEnterpriseAddresses($body)

Get enterprise IP address information

Retrieve the public IP address information for the management and control entities associated with this enterprise, including Orchestrator(s), Gateway(s), and datacenter(s).  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseAddresses(); // \Swagger\Client\Model\EnterpriseGetEnterpriseAddresses | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseAddresses($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseAddresses**](../Model/EnterpriseGetEnterpriseAddresses.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseAddressesResultItem[]**](../Model/EnterpriseGetEnterpriseAddressesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseAlertConfigurations**
> \Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurationsResultItem[] enterpriseGetEnterpriseAlertConfigurations($body)

Get the enterprise alert configuration

Get the alert configurations associated with an enterprise.  Privileges required:  `READ` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurations(); // \Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurations | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseAlertConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseAlertConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurations**](../Model/EnterpriseGetEnterpriseAlertConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurationsResultItem[]**](../Model/EnterpriseGetEnterpriseAlertConfigurationsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseAlerts**
> \Swagger\Client\Model\EnterpriseGetEnterpriseAlertsResult enterpriseGetEnterpriseAlerts($body)

Get a list of the alerts triggered for the enterprise

Get a list of past alerts triggered for the enterprise.  Privileges required:  `READ` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseAlerts(); // \Swagger\Client\Model\EnterpriseGetEnterpriseAlerts | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseAlerts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseAlerts**](../Model/EnterpriseGetEnterpriseAlerts.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseAlertsResult**](../Model/EnterpriseGetEnterpriseAlertsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseAllAlertRecipients**
> \Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipientsResult enterpriseGetEnterpriseAllAlertRecipients($body)

List recipients currently receiving ALL enterprise alerts

List the recipients currently configured to receive all alerts for an enterprise.  Privileges required:  `READ` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipients(); // \Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipients | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseAllAlertRecipients($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseAllAlertRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipients**](../Model/EnterpriseGetEnterpriseAllAlertRecipients.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipientsResult**](../Model/EnterpriseGetEnterpriseAllAlertRecipientsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseCapabilities**
> \Swagger\Client\Model\EnterpriseGetEnterpriseCapabilitiesResult enterpriseGetEnterpriseCapabilities($body)

Get enterprise capabilities

Retrieve a list of the enterprise capabilities currently enabled/disabled on an enterprise (e.g. BGP, COS mapping, PKI, etc.)  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseCapabilities(); // \Swagger\Client\Model\EnterpriseGetEnterpriseCapabilities | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseCapabilities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseCapabilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseCapabilities**](../Model/EnterpriseGetEnterpriseCapabilities.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseCapabilitiesResult**](../Model/EnterpriseGetEnterpriseCapabilitiesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseConfigurations**
> \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurationsResultItem[] enterpriseGetEnterpriseConfigurations($body)

Get enterprise configuration profiles

Retrieve a list of configuration profiles existing on an enterprise, with optional edge and/or module detail.  Privileges required:  `READ` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations(); // \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations**](../Model/EnterpriseGetEnterpriseConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseConfigurationsResultItem[]**](../Model/EnterpriseGetEnterpriseConfigurationsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseEdges**
> \Swagger\Client\Model\EnterpriseGetEnterpriseEdgesResultItem[] enterpriseGetEnterpriseEdges($body)

Get edges associated with an enterprise

Get the edges associated with an enterprise, with optional location and link detail.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseEdges(); // \Swagger\Client\Model\EnterpriseGetEnterpriseEdges | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseEdges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseEdges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseEdges**](../Model/EnterpriseGetEnterpriseEdges.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseEdgesResultItem[]**](../Model/EnterpriseGetEnterpriseEdgesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseGatewayHandoff**
> \Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoffResult enterpriseGetEnterpriseGatewayHandoff($body)

Get enterprise gateway handoff configuration

Get enterprise gateway handoff configuration.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoff(); // \Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoff | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseGatewayHandoff($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseGatewayHandoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoff**](../Model/EnterpriseGetEnterpriseGatewayHandoff.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoffResult**](../Model/EnterpriseGetEnterpriseGatewayHandoffResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseNetworkAllocation**
> \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocationResult enterpriseGetEnterpriseNetworkAllocation($body)

Get an enterprise network allocation

Retrieve a network allocation object by id.  Privileges required:  `READ` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocation**](../Model/EnterpriseGetEnterpriseNetworkAllocation.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocationResult**](../Model/EnterpriseGetEnterpriseNetworkAllocationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseNetworkAllocations**
> \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocationsResultItem[] enterpriseGetEnterpriseNetworkAllocations($body)

Get all network allocation objects defined on an enterprise

Retrieve a list of all of the network allocations defined onthe given enterprise.  Privileges required:  `READ` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocations(); // \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocations | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseNetworkAllocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseNetworkAllocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocations**](../Model/EnterpriseGetEnterpriseNetworkAllocations.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocationsResultItem[]**](../Model/EnterpriseGetEnterpriseNetworkAllocationsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseRouteConfiguration**
> \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfigurationResult enterpriseGetEnterpriseRouteConfiguration($body)

Get route advertisement and routing preferences policy

Get enterprise route advertisement, routing peferences and OSPF, BGP advertisement policy as configured in the Overlay Flow Control table.  Privileges required:  `READ` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration(); // \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseRouteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseRouteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration**](../Model/EnterpriseGetEnterpriseRouteConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfigurationResult**](../Model/EnterpriseGetEnterpriseRouteConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseRouteTable**
> \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTableResult enterpriseGetEnterpriseRouteTable($body)

Get the enterprise route table

Get composite enterprise route table, optionally scoped by profile(s). The returned routes include static routes, directly connected routes and learned routes.  Privileges required:  `READ` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable(); // \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseRouteTable($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseRouteTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable**](../Model/EnterpriseGetEnterpriseRouteTable.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteTableResult**](../Model/EnterpriseGetEnterpriseRouteTableResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseServices**
> \Swagger\Client\Model\EnterpriseGetEnterpriseServicesResultItem[] enterpriseGetEnterpriseServices($body)

Get enterprise network service detail

Get the network service JSON objects defined for an enterprise.  Privileges required:  `READ` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseServices(); // \Swagger\Client\Model\EnterpriseGetEnterpriseServices | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseServices**](../Model/EnterpriseGetEnterpriseServices.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseServicesResultItem[]**](../Model/EnterpriseGetEnterpriseServicesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterprise**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseResult enterpriseInsertEnterprise($body)

Insert a new enterprise

Insert an enterprise, owned by the operator or an MSP.  Privileges required:  `CREATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterprise(); // \Swagger\Client\Model\EnterpriseInsertEnterprise | 

try {
    $result = $apiInstance->enterpriseInsertEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterprise**](../Model/EnterpriseInsertEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseResult**](../Model/EnterpriseInsertEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseNetworkAllocation**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocationResult enterpriseInsertEnterpriseNetworkAllocation($body)

Insert an enterprise network allocation

Insert a new enterprise network allocation.  Privileges required:  `CREATE` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation**](../Model/EnterpriseInsertEnterpriseNetworkAllocation.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocationResult**](../Model/EnterpriseInsertEnterpriseNetworkAllocationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseService**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseServiceResult enterpriseInsertEnterpriseService($body)

Insert a new enterprise service

Insert a new enterprise service.  Privileges required:  `CREATE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseService(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseService | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertEnterpriseService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterpriseService**](../Model/EnterpriseInsertEnterpriseService.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseServiceResult**](../Model/EnterpriseInsertEnterpriseServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseAlertConfigurations**
> \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurationsResult enterpriseInsertOrUpdateEnterpriseAlertConfigurations($body)

Insert, update, or delete enterprise alert configurations

Insert, update, or delete enterprise alert configurations. Returns the array of alert configurations submitted, with ids added for the entries that have been successfully inserted. If an entry is not successfully inserted or updated, an `error` property is included in the .  Privileges required:  `CREATE` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurations(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurations | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseAlertConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertOrUpdateEnterpriseAlertConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurations**](../Model/EnterpriseInsertOrUpdateEnterpriseAlertConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurationsResult**](../Model/EnterpriseInsertOrUpdateEnterpriseAlertConfigurationsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseCapability**
> \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapabilityResult enterpriseInsertOrUpdateEnterpriseCapability($body)

Insert or update an enterprise capability

Insert or update an enterprise capability.  Privileges required:  `UPDATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseCapability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertOrUpdateEnterpriseCapability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability**](../Model/EnterpriseInsertOrUpdateEnterpriseCapability.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapabilityResult**](../Model/EnterpriseInsertOrUpdateEnterpriseCapabilityResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseGatewayHandoff**
> \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoffResult enterpriseInsertOrUpdateEnterpriseGatewayHandoff($body)

Insert or update an enterprise gateway handoff configuration

Insert or update an enterprise gateway handoff configuration.  Privileges required:  `UPDATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseGatewayHandoff($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertOrUpdateEnterpriseGatewayHandoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff**](../Model/EnterpriseInsertOrUpdateEnterpriseGatewayHandoff.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoffResult**](../Model/EnterpriseInsertOrUpdateEnterpriseGatewayHandoffResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseSetEnterpriseAllAlertRecipients**
> \Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipientsResult enterpriseSetEnterpriseAllAlertRecipients($body)

Set the recipients who should receive all alerts for an enterprise

Set the recipients who should receive all alerts for an enterprise.  Privileges required:  `UPDATE` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipients(); // \Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipients | 

try {
    $result = $apiInstance->enterpriseSetEnterpriseAllAlertRecipients($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseSetEnterpriseAllAlertRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipients**](../Model/EnterpriseSetEnterpriseAllAlertRecipients.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipientsResult**](../Model/EnterpriseSetEnterpriseAllAlertRecipientsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterprise**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseResult enterpriseUpdateEnterprise($body)

Update an enterprise

Update an enterprise provided an object id or name, and an _update object with the names and values of columns to be updated.  Privileges required:  `UPDATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterprise(); // \Swagger\Client\Model\EnterpriseUpdateEnterprise | 

try {
    $result = $apiInstance->enterpriseUpdateEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterprise**](../Model/EnterpriseUpdateEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseResult**](../Model/EnterpriseUpdateEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseNetworkAllocation**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocationResult enterpriseUpdateEnterpriseNetworkAllocation($body)

Update an enterprise network allocation

Update an enterprise network allocation, provided an object id and an _update object with the names and values of columns to be updated.  Privileges required:  `UPDATE` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation**](../Model/EnterpriseUpdateEnterpriseNetworkAllocation.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocationResult**](../Model/EnterpriseUpdateEnterpriseNetworkAllocationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseRoute**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteResult enterpriseUpdateEnterpriseRoute($body)

Update an enterprise route

Update an enterprise route, set advertisement and cost values. Required parameters include the original route, as returned by enterprise/getEnterpriseRouteTable and the updated route with modified advertisement and route preference ordering.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute**](../Model/EnterpriseUpdateEnterpriseRoute.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteResult**](../Model/EnterpriseUpdateEnterpriseRouteResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseRouteConfiguration**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfigurationResult enterpriseUpdateEnterpriseRouteConfiguration($body)

Update enterprise routing configuration

Update enterprise routing configuration, by configuration id or logicalId.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseRouteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseRouteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration**](../Model/EnterpriseUpdateEnterpriseRouteConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfigurationResult**](../Model/EnterpriseUpdateEnterpriseRouteConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseSecurityPolicy**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicyResult enterpriseUpdateEnterpriseSecurityPolicy($body)

Update enterprise security policy

Update enterprise security policy in accordance with to the passed ipsec settings.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseSecurityPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseSecurityPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy**](../Model/EnterpriseUpdateEnterpriseSecurityPolicy.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicyResult**](../Model/EnterpriseUpdateEnterpriseSecurityPolicyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseService**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseServiceResult enterpriseUpdateEnterpriseService($body)

Update an enterprise service

Update the enterprise service with the given id according to the settings specified by the _update field.  Privileges required:  `UPDATE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseService(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseService | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseService**](../Model/EnterpriseUpdateEnterpriseService.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseServiceResult**](../Model/EnterpriseUpdateEnterpriseServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

