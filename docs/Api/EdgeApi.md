# Swagger\Client\EdgeApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**edgeDeleteEdge**](EdgeApi.md#edgeDeleteEdge) | **POST** /edge/deleteEdge | Delete an edge
[**edgeDeleteEdgeBgpNeighborRecords**](EdgeApi.md#edgeDeleteEdgeBgpNeighborRecords) | **POST** /edge/deleteEdgeBgpNeighborRecords | Delete edge BGP neighbor records
[**edgeEdgeCancelReactivation**](EdgeApi.md#edgeEdgeCancelReactivation) | **POST** /edge/edgeCancelReactivation | Cancel a pending edge reactivation request
[**edgeEdgeProvision**](EdgeApi.md#edgeEdgeProvision) | **POST** /edge/edgeProvision | Provision an edge
[**edgeEdgeRequestReactivation**](EdgeApi.md#edgeEdgeRequestReactivation) | **POST** /edge/edgeRequestReactivation | Reactivate an edge
[**edgeGetEdge**](EdgeApi.md#edgeGetEdge) | **POST** /edge/getEdge | Get edge
[**edgeGetEdgeConfigurationStack**](EdgeApi.md#edgeGetEdgeConfigurationStack) | **POST** /edge/getEdgeConfigurationStack | Get an edge&#39;s configuration stack
[**edgeSetEdgeEnterpriseConfiguration**](EdgeApi.md#edgeSetEdgeEnterpriseConfiguration) | **POST** /edge/setEdgeEnterpriseConfiguration | Apply an enterprise configuration to an Edge
[**edgeSetEdgeHandOffGateways**](EdgeApi.md#edgeSetEdgeHandOffGateways) | **POST** /edge/setEdgeHandOffGateways | Set an edge&#39;s on-premise hand off gateways
[**edgeSetEdgeOperatorConfiguration**](EdgeApi.md#edgeSetEdgeOperatorConfiguration) | **POST** /edge/setEdgeOperatorConfiguration | Apply an operator configuration to an Edge
[**edgeUpdateEdgeAdminPassword**](EdgeApi.md#edgeUpdateEdgeAdminPassword) | **POST** /edge/updateEdgeAdminPassword | Update edge&#39;s local UI authentication credentials
[**edgeUpdateEdgeAttributes**](EdgeApi.md#edgeUpdateEdgeAttributes) | **POST** /edge/updateEdgeAttributes | Update edge attributes
[**edgeUpdateEdgeCredentialsByConfiguration**](EdgeApi.md#edgeUpdateEdgeCredentialsByConfiguration) | **POST** /edge/updateEdgeCredentialsByConfiguration | Update edge UI credentials by configuration id


# **edgeDeleteEdge**
> \Swagger\Client\Model\EdgeDeleteEdgeResultItem[] edgeDeleteEdge($body)

Delete an edge

Delete an edge by id.  Privileges required:  `DELETE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeDeleteEdge(); // \Swagger\Client\Model\EdgeDeleteEdge | 

try {
    $result = $apiInstance->edgeDeleteEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeDeleteEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeDeleteEdge**](../Model/EdgeDeleteEdge.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeDeleteEdgeResultItem[]**](../Model/EdgeDeleteEdgeResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeDeleteEdgeBgpNeighborRecords**
> \Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecordsResult edgeDeleteEdgeBgpNeighborRecords($body)

Delete edge BGP neighbor records

Deletes BGP record(s) matching the given record keys (neighborIp) on the edges with the given IDs, if they exist.  Privileges required:  `DELETE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecords(); // \Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecords | 

try {
    $result = $apiInstance->edgeDeleteEdgeBgpNeighborRecords($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeDeleteEdgeBgpNeighborRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecords**](../Model/EdgeDeleteEdgeBgpNeighborRecords.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecordsResult**](../Model/EdgeDeleteEdgeBgpNeighborRecordsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeCancelReactivation**
> \Swagger\Client\Model\EdgeEdgeCancelReactivationResult edgeEdgeCancelReactivation($body)

Cancel a pending edge reactivation request

Cancel a pending reactivation edge reactivation request.  Privileges required:  `CREATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeCancelReactivation(); // \Swagger\Client\Model\EdgeEdgeCancelReactivation | 

try {
    $result = $apiInstance->edgeEdgeCancelReactivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeEdgeCancelReactivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeCancelReactivation**](../Model/EdgeEdgeCancelReactivation.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeEdgeCancelReactivationResult**](../Model/EdgeEdgeCancelReactivationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeProvision**
> \Swagger\Client\Model\EdgeEdgeProvisionResult edgeEdgeProvision($body)

Provision an edge

Provision an edge prior to activation.  Privileges required:  `CREATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeProvision(); // \Swagger\Client\Model\EdgeEdgeProvision | 

try {
    $result = $apiInstance->edgeEdgeProvision($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeEdgeProvision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeProvision**](../Model/EdgeEdgeProvision.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeEdgeProvisionResult**](../Model/EdgeEdgeProvisionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeRequestReactivation**
> \Swagger\Client\Model\EdgeEdgeRequestReactivationResult edgeEdgeRequestReactivation($body)

Reactivate an edge

Update activation state for an edge to REACTIVATION_PENDING.  Privileges required:  `CREATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeRequestReactivation(); // \Swagger\Client\Model\EdgeEdgeRequestReactivation | 

try {
    $result = $apiInstance->edgeEdgeRequestReactivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeEdgeRequestReactivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeRequestReactivation**](../Model/EdgeEdgeRequestReactivation.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeEdgeRequestReactivationResult**](../Model/EdgeEdgeRequestReactivationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeGetEdge**
> \Swagger\Client\Model\EdgeGetEdgeResult edgeGetEdge($body)

Get edge

Get VELOCLOUD_EDGE object, with optional link, site, enterprise, or configuration information. Query by object id, deviceId, activationKey or logicalId. All four values are unique so are sufficient to identify a single edge in the database.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetEdge(); // \Swagger\Client\Model\EdgeGetEdge | 

try {
    $result = $apiInstance->edgeGetEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeGetEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeGetEdge**](../Model/EdgeGetEdge.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeGetEdgeResult**](../Model/EdgeGetEdgeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeGetEdgeConfigurationStack**
> \Swagger\Client\Model\EdgeGetEdgeConfigurationStackResultItem[] edgeGetEdgeConfigurationStack($body)

Get an edge's configuration stack

Retrieve an edge's complete configuration profile, with all modules included.  Privileges required:  `READ` `EDGE`  `READ` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetEdgeConfigurationStack(); // \Swagger\Client\Model\EdgeGetEdgeConfigurationStack | 

try {
    $result = $apiInstance->edgeGetEdgeConfigurationStack($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeGetEdgeConfigurationStack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeGetEdgeConfigurationStack**](../Model/EdgeGetEdgeConfigurationStack.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeGetEdgeConfigurationStackResultItem[]**](../Model/EdgeGetEdgeConfigurationStackResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeSetEdgeEnterpriseConfiguration**
> \Swagger\Client\Model\EdgeSetEdgeEnterpriseConfigurationResult edgeSetEdgeEnterpriseConfiguration($body)

Apply an enterprise configuration to an Edge

Set an edge's enterprise configuration, overriding the enterprise default for an edge.  Privileges required:  `UPDATE` `EDGE`  `UPDATE` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeSetEdgeEnterpriseConfiguration(); // \Swagger\Client\Model\EdgeSetEdgeEnterpriseConfiguration | 

try {
    $result = $apiInstance->edgeSetEdgeEnterpriseConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeSetEdgeEnterpriseConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeSetEdgeEnterpriseConfiguration**](../Model/EdgeSetEdgeEnterpriseConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeSetEdgeEnterpriseConfigurationResult**](../Model/EdgeSetEdgeEnterpriseConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeSetEdgeHandOffGateways**
> \Swagger\Client\Model\EdgeSetEdgeHandOffGatewaysResult edgeSetEdgeHandOffGateways($body)

Set an edge's on-premise hand off gateways

Set an edge's on-premise hand off gateways. A primary and secondary gateway are defined, primary is required, secondary is optional. All existing edge-gateway hand off relationships are moved and are replaced by the the specified primary and secondary gateways.  Privileges required:  `UPDATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeSetEdgeHandOffGateways(); // \Swagger\Client\Model\EdgeSetEdgeHandOffGateways | 

try {
    $result = $apiInstance->edgeSetEdgeHandOffGateways($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeSetEdgeHandOffGateways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeSetEdgeHandOffGateways**](../Model/EdgeSetEdgeHandOffGateways.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeSetEdgeHandOffGatewaysResult**](../Model/EdgeSetEdgeHandOffGatewaysResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeSetEdgeOperatorConfiguration**
> \Swagger\Client\Model\EdgeSetEdgeOperatorConfigurationResult edgeSetEdgeOperatorConfiguration($body)

Apply an operator configuration to an Edge

Set an Edge's operator configuration. This overrides any enterprise-assigned operator configuration and the network default operator configuration.  Privileges required:  `UPDATE` `EDGE`  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeSetEdgeOperatorConfiguration(); // \Swagger\Client\Model\EdgeSetEdgeOperatorConfiguration | 

try {
    $result = $apiInstance->edgeSetEdgeOperatorConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeSetEdgeOperatorConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeSetEdgeOperatorConfiguration**](../Model/EdgeSetEdgeOperatorConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeSetEdgeOperatorConfigurationResult**](../Model/EdgeSetEdgeOperatorConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeUpdateEdgeAdminPassword**
> \Swagger\Client\Model\EdgeUpdateEdgeAdminPasswordResult edgeUpdateEdgeAdminPassword($body)

Update edge's local UI authentication credentials

Request an update to the edge's local UI authentication credentials. On success, returns a JSON object with the ID of the action queued, status for which can be queried using the edgeAction/getEdgeAction API  Privileges required:  `UPDATE` `EDGE`  `UPDATE` `ENTERPRISE_KEYS`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeAdminPassword(); // \Swagger\Client\Model\EdgeUpdateEdgeAdminPassword | 

try {
    $result = $apiInstance->edgeUpdateEdgeAdminPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeUpdateEdgeAdminPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeUpdateEdgeAdminPassword**](../Model/EdgeUpdateEdgeAdminPassword.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeUpdateEdgeAdminPasswordResult**](../Model/EdgeUpdateEdgeAdminPasswordResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeUpdateEdgeAttributes**
> \Swagger\Client\Model\EdgeUpdateEdgeAttributesResult edgeUpdateEdgeAttributes($body)

Update edge attributes

Update basic edge attributes, including edge name, description, site information, or serial number.  Privileges required:  `UPDATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeAttributes(); // \Swagger\Client\Model\EdgeUpdateEdgeAttributes | 

try {
    $result = $apiInstance->edgeUpdateEdgeAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeUpdateEdgeAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeUpdateEdgeAttributes**](../Model/EdgeUpdateEdgeAttributes.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeUpdateEdgeAttributesResult**](../Model/EdgeUpdateEdgeAttributesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeUpdateEdgeCredentialsByConfiguration**
> \Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfigurationResult edgeUpdateEdgeCredentialsByConfiguration($body)

Update edge UI credentials by configuration id

Request an update to the edge-local UI authentication credentials for all edges belonging to a configuration profile. On success, returns a JSON object containing a list of each of the action IDs queued.  Privileges required:  `UPDATE` `EDGE`  `UPDATE` `ENTERPRISE_KEYS`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfiguration(); // \Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfiguration | 

try {
    $result = $apiInstance->edgeUpdateEdgeCredentialsByConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeUpdateEdgeCredentialsByConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfiguration**](../Model/EdgeUpdateEdgeCredentialsByConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfigurationResult**](../Model/EdgeUpdateEdgeCredentialsByConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

