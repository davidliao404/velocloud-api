# Swagger\Client\RoleApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**roleCreateRoleCustomization**](RoleApi.md#roleCreateRoleCustomization) | **POST** /role/createRoleCustomization | Create a role customization
[**roleDeleteRoleCustomization**](RoleApi.md#roleDeleteRoleCustomization) | **POST** /role/deleteRoleCustomization | Delete a role customization
[**roleGetUserTypeRoles**](RoleApi.md#roleGetUserTypeRoles) | **POST** /role/getUserTypeRoles | Get the roles defined for a user type
[**roleSetEnterpriseDelegatedToEnterpriseProxy**](RoleApi.md#roleSetEnterpriseDelegatedToEnterpriseProxy) | **POST** /role/setEnterpriseDelegatedToEnterpriseProxy | Grant enterprise access to an enterprise proxy
[**roleSetEnterpriseDelegatedToOperator**](RoleApi.md#roleSetEnterpriseDelegatedToOperator) | **POST** /role/setEnterpriseDelegatedToOperator | Grant enterprise access to the network operator
[**roleSetEnterpriseProxyDelegatedToOperator**](RoleApi.md#roleSetEnterpriseProxyDelegatedToOperator) | **POST** /role/setEnterpriseProxyDelegatedToOperator | Grant enterprise proxy access to the network operator
[**roleSetEnterpriseUserManagementDelegatedToOperator**](RoleApi.md#roleSetEnterpriseUserManagementDelegatedToOperator) | **POST** /role/setEnterpriseUserManagementDelegatedToOperator | Grant enterprise user access to the network operator


# **roleCreateRoleCustomization**
> \Swagger\Client\Model\RoleCreateRoleCustomizationResult roleCreateRoleCustomization($body)

Create a role customization

Create a role customization given a roleId and an array of privilegeIds.  Privileges required:  `UPDATE` `NETWORK`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleCreateRoleCustomization(); // \Swagger\Client\Model\RoleCreateRoleCustomization | 

try {
    $result = $apiInstance->roleCreateRoleCustomization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleCreateRoleCustomization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleCreateRoleCustomization**](../Model/RoleCreateRoleCustomization.md)|  |

### Return type

[**\Swagger\Client\Model\RoleCreateRoleCustomizationResult**](../Model/RoleCreateRoleCustomizationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleDeleteRoleCustomization**
> \Swagger\Client\Model\RoleDeleteRoleCustomizationResult roleDeleteRoleCustomization($body)

Delete a role customization

Delete a role customization, given a role customization name or forRoleId.  Privileges required:  `UPDATE` `NETWORK`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleDeleteRoleCustomization(); // \Swagger\Client\Model\RoleDeleteRoleCustomization | 

try {
    $result = $apiInstance->roleDeleteRoleCustomization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleDeleteRoleCustomization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleDeleteRoleCustomization**](../Model/RoleDeleteRoleCustomization.md)|  |

### Return type

[**\Swagger\Client\Model\RoleDeleteRoleCustomizationResult**](../Model/RoleDeleteRoleCustomizationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleGetUserTypeRoles**
> \Swagger\Client\Model\RoleGetUserTypeRolesResultItem[] roleGetUserTypeRoles($body)

Get the roles defined for a user type

Return the defined roles for a specified user type.  Privileges required:  `READ` `ENTERPRISE_USER`, or  `READ` `PROXY_USER`, or  `READ` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleGetUserTypeRoles(); // \Swagger\Client\Model\RoleGetUserTypeRoles | 

try {
    $result = $apiInstance->roleGetUserTypeRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleGetUserTypeRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleGetUserTypeRoles**](../Model/RoleGetUserTypeRoles.md)|  |

### Return type

[**\Swagger\Client\Model\RoleGetUserTypeRolesResultItem[]**](../Model/RoleGetUserTypeRolesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSetEnterpriseDelegatedToEnterpriseProxy**
> \Swagger\Client\Model\RoleSetEnterpriseDelegatedToEnterpriseProxyResult roleSetEnterpriseDelegatedToEnterpriseProxy($body)

Grant enterprise access to an enterprise proxy

When an enterprise is delegated to a proxy, proxy users are granted access to view, configure and troubleshoot edges owned by the enterprise. As a security consideration, proxy Support users cannot view personally identifiable information.  Privileges required:  `UPDATE` `ENTERPRISE_DELEGATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 

try {
    $result = $apiInstance->roleSetEnterpriseDelegatedToEnterpriseProxy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSetEnterpriseDelegatedToEnterpriseProxy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)|  |

### Return type

[**\Swagger\Client\Model\RoleSetEnterpriseDelegatedToEnterpriseProxyResult**](../Model/RoleSetEnterpriseDelegatedToEnterpriseProxyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSetEnterpriseDelegatedToOperator**
> \Swagger\Client\Model\RoleSetEnterpriseDelegatedToOperatorResult roleSetEnterpriseDelegatedToOperator($body)

Grant enterprise access to the network operator

When an enterprise is delegated to the operator, operator users are permitted to view, configure and troubleshoot edges owned by the enterprise. As a security consideration, operator users cannot view personally identifiable information.  Privileges required:  `UPDATE` `ENTERPRISE_DELEGATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 

try {
    $result = $apiInstance->roleSetEnterpriseDelegatedToOperator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSetEnterpriseDelegatedToOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)|  |

### Return type

[**\Swagger\Client\Model\RoleSetEnterpriseDelegatedToOperatorResult**](../Model/RoleSetEnterpriseDelegatedToOperatorResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSetEnterpriseProxyDelegatedToOperator**
> \Swagger\Client\Model\RoleSetEnterpriseProxyDelegatedToOperatorResult roleSetEnterpriseProxyDelegatedToOperator($body)

Grant enterprise proxy access to the network operator

When an enterprise proxy is delegated to the operator, operator users are granted access to view, configure and troubleshoot objects owned by the proxy.  Privileges required:  `UPDATE` `ENTERPRISE_PROXY_DELEGATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 

try {
    $result = $apiInstance->roleSetEnterpriseProxyDelegatedToOperator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSetEnterpriseProxyDelegatedToOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  |

### Return type

[**\Swagger\Client\Model\RoleSetEnterpriseProxyDelegatedToOperatorResult**](../Model/RoleSetEnterpriseProxyDelegatedToOperatorResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSetEnterpriseUserManagementDelegatedToOperator**
> \Swagger\Client\Model\RoleSetEnterpriseUserManagementDelegatedToOperatorResult roleSetEnterpriseUserManagementDelegatedToOperator($body)

Grant enterprise user access to the network operator

When enterprise user management is delegated to the operator, operator users are granted enterprise-level user management capabilities (user creation, password resets, etc.).  Privileges required:  `UPDATE` `ENTERPRISE_DELEGATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 

try {
    $result = $apiInstance->roleSetEnterpriseUserManagementDelegatedToOperator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSetEnterpriseUserManagementDelegatedToOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)|  |

### Return type

[**\Swagger\Client\Model\RoleSetEnterpriseUserManagementDelegatedToOperatorResult**](../Model/RoleSetEnterpriseUserManagementDelegatedToOperatorResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

