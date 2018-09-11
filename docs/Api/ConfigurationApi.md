# Swagger\Client\ConfigurationApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationCloneAndConvertConfiguration**](ConfigurationApi.md#configurationCloneAndConvertConfiguration) | **POST** /configuration/cloneAndConvertConfiguration | Clone and convert a network based profile configuration to segment based profile configuration
[**configurationCloneConfiguration**](ConfigurationApi.md#configurationCloneConfiguration) | **POST** /configuration/cloneConfiguration | Clone a configuration profile
[**configurationCloneEnterpriseTemplate**](ConfigurationApi.md#configurationCloneEnterpriseTemplate) | **POST** /configuration/cloneEnterpriseTemplate | Clone the default enterprise configuration profile
[**configurationDeleteConfiguration**](ConfigurationApi.md#configurationDeleteConfiguration) | **POST** /configuration/deleteConfiguration | Delete a configuration profile
[**configurationGetConfiguration**](ConfigurationApi.md#configurationGetConfiguration) | **POST** /configuration/getConfiguration | Get a configuration profile
[**configurationGetConfigurationModules**](ConfigurationApi.md#configurationGetConfigurationModules) | **POST** /configuration/getConfigurationModules | List the modules that compose a configuration profile
[**configurationGetRoutableApplications**](ConfigurationApi.md#configurationGetRoutableApplications) | **POST** /configuration/getRoutableApplications | List applications that are first packet routable
[**configurationInsertConfigurationModule**](ConfigurationApi.md#configurationInsertConfigurationModule) | **POST** /configuration/insertConfigurationModule | Insert a new configuration module
[**configurationUpdateConfigurationModule**](ConfigurationApi.md#configurationUpdateConfigurationModule) | **POST** /configuration/updateConfigurationModule | Update a configuration module


# **configurationCloneAndConvertConfiguration**
> \Swagger\Client\Model\ConfigurationCloneAndConvertConfigurationResult configurationCloneAndConvertConfiguration($body)

Clone and convert a network based profile configuration to segment based profile configuration

Clones an convert existing network configuration by configurationId. Accepts an enterpriseId or networkId to associate the new config with an enterprise or network. On success, returns an object the ID of the newly created configuration object.  Privileges required:  `CREATE` `ENTERPRISE_PROFILE`, or  `CREATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneAndConvertConfiguration(); // \Swagger\Client\Model\ConfigurationCloneAndConvertConfiguration | 

try {
    $result = $apiInstance->configurationCloneAndConvertConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCloneAndConvertConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationCloneAndConvertConfiguration**](../Model/ConfigurationCloneAndConvertConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationCloneAndConvertConfigurationResult**](../Model/ConfigurationCloneAndConvertConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationCloneConfiguration**
> \Swagger\Client\Model\ConfigurationCloneConfigurationResult configurationCloneConfiguration($body)

Clone a configuration profile

Clones an existing configuration by configurationId. Accepts an enterpriseId or networkId to associate the new config with an enterprise or network. Select modules may also be specified. On success, returns an object the ID of the newly created configuration object.  Privileges required:  `CREATE` `ENTERPRISE_PROFILE`, or  `CREATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneConfiguration(); // \Swagger\Client\Model\ConfigurationCloneConfiguration | 

try {
    $result = $apiInstance->configurationCloneConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCloneConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationCloneConfiguration**](../Model/ConfigurationCloneConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationCloneConfigurationResult**](../Model/ConfigurationCloneConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationCloneEnterpriseTemplate**
> \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplateResult configurationCloneEnterpriseTemplate($body)

Clone the default enterprise configuration profile

Creates a new enterprise configuration from the enterprise default configuration. On success, returns an object the ID of the newly created configuration object.  Privileges required:  `CREATE` `ENTERPRISE_PROFILE`, or  `CREATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate(); // \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate | 

try {
    $result = $apiInstance->configurationCloneEnterpriseTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCloneEnterpriseTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate**](../Model/ConfigurationCloneEnterpriseTemplate.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationCloneEnterpriseTemplateResult**](../Model/ConfigurationCloneEnterpriseTemplateResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationDeleteConfiguration**
> \Swagger\Client\Model\ConfigurationDeleteConfigurationResult configurationDeleteConfiguration($body)

Delete a configuration profile

Delete an existing configuration profile. On success, returns an object indicating the number of rows deleted.  Privileges required:  `DELETE` `ENTERPRISE_PROFILE`, or  `DELETE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationDeleteConfiguration(); // \Swagger\Client\Model\ConfigurationDeleteConfiguration | 

try {
    $result = $apiInstance->configurationDeleteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationDeleteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationDeleteConfiguration**](../Model/ConfigurationDeleteConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationDeleteConfigurationResult**](../Model/ConfigurationDeleteConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfiguration**
> \Swagger\Client\Model\ConfigurationGetConfigurationResult configurationGetConfiguration($body)

Get a configuration profile

Get a configuration profile, optionally with module detail.  Privileges required:  `READ` `ENTERPRISE_PROFILE`, or  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetConfiguration(); // \Swagger\Client\Model\ConfigurationGetConfiguration | 

try {
    $result = $apiInstance->configurationGetConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationGetConfiguration**](../Model/ConfigurationGetConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationGetConfigurationResult**](../Model/ConfigurationGetConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfigurationModules**
> \Swagger\Client\Model\ConfigurationGetConfigurationModulesResultItem[] configurationGetConfigurationModules($body)

List the modules that compose a configuration profile

Retrieve a list of the configuration modules that compose the given configuration profile.  Privileges required:  `READ` `ENTERPRISE_PROFILE`, or  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetConfigurationModules(); // \Swagger\Client\Model\ConfigurationGetConfigurationModules | 

try {
    $result = $apiInstance->configurationGetConfigurationModules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfigurationModules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationGetConfigurationModules**](../Model/ConfigurationGetConfigurationModules.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationGetConfigurationModulesResultItem[]**](../Model/ConfigurationGetConfigurationModulesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetRoutableApplications**
> \Swagger\Client\Model\ConfigurationGetRoutableApplicationsResult configurationGetRoutableApplications($body)

List applications that are first packet routable

List the applications that are first packet routable. If called from the operator context, an enterprise ID may optionally be specified to filter the result set. Additionally, an edge ID may be specified to get the map for a specific edge.  Privileges required:  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetRoutableApplications(); // \Swagger\Client\Model\ConfigurationGetRoutableApplications | 

try {
    $result = $apiInstance->configurationGetRoutableApplications($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetRoutableApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationGetRoutableApplications**](../Model/ConfigurationGetRoutableApplications.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationGetRoutableApplicationsResult**](../Model/ConfigurationGetRoutableApplicationsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationInsertConfigurationModule**
> \Swagger\Client\Model\ConfigurationInsertConfigurationModuleResult configurationInsertConfigurationModule($body)

Insert a new configuration module

Insert a new configuration module into the given configuration profile.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`, or  `UPDATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationInsertConfigurationModule(); // \Swagger\Client\Model\ConfigurationInsertConfigurationModule | 

try {
    $result = $apiInstance->configurationInsertConfigurationModule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationInsertConfigurationModule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationInsertConfigurationModule**](../Model/ConfigurationInsertConfigurationModule.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationInsertConfigurationModuleResult**](../Model/ConfigurationInsertConfigurationModuleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationUpdateConfigurationModule**
> \Swagger\Client\Model\ConfigurationUpdateConfigurationModuleResult configurationUpdateConfigurationModule($body)

Update a configuration module

Update an existing configuration module with the data. module data contained in the _update object.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`, or  `UPDATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationUpdateConfigurationModule(); // \Swagger\Client\Model\ConfigurationUpdateConfigurationModule | 

try {
    $result = $apiInstance->configurationUpdateConfigurationModule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationUpdateConfigurationModule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationUpdateConfigurationModule**](../Model/ConfigurationUpdateConfigurationModule.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationUpdateConfigurationModuleResult**](../Model/ConfigurationUpdateConfigurationModuleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

