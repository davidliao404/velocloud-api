# Swagger\Client\UserMaintenanceApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGetEnterpriseUsers**](UserMaintenanceApi.md#enterpriseGetEnterpriseUsers) | **POST** /enterprise/getEnterpriseUsers | Get list of enterprise users by enterprise id
[**enterpriseInsertEnterpriseUser**](UserMaintenanceApi.md#enterpriseInsertEnterpriseUser) | **POST** /enterprise/insertEnterpriseUser | Insert an enterprise user
[**enterpriseProxyDeleteEnterpriseProxyUser**](UserMaintenanceApi.md#enterpriseProxyDeleteEnterpriseProxyUser) | **POST** /enterpriseProxy/deleteEnterpriseProxyUser | Delete an enterprise proxy admin user
[**enterpriseProxyGetEnterpriseProxyUser**](UserMaintenanceApi.md#enterpriseProxyGetEnterpriseProxyUser) | **POST** /enterpriseProxy/getEnterpriseProxyUser | Get an enterprise proxy user
[**enterpriseProxyGetEnterpriseProxyUsers**](UserMaintenanceApi.md#enterpriseProxyGetEnterpriseProxyUsers) | **POST** /enterpriseProxy/getEnterpriseProxyUsers | Get all enterprise proxy admin users
[**enterpriseProxyInsertEnterpriseProxyUser**](UserMaintenanceApi.md#enterpriseProxyInsertEnterpriseProxyUser) | **POST** /enterpriseProxy/insertEnterpriseProxyUser | Create a new partner admin user
[**enterpriseProxyUpdateEnterpriseProxyUser**](UserMaintenanceApi.md#enterpriseProxyUpdateEnterpriseProxyUser) | **POST** /enterpriseProxy/updateEnterpriseProxyUser | Update an enterprise proxy admin user
[**enterpriseUserDeleteEnterpriseUser**](UserMaintenanceApi.md#enterpriseUserDeleteEnterpriseUser) | **POST** /enterpriseUser/deleteEnterpriseUser | Delete an enterprise user.
[**enterpriseUserGetEnterpriseUser**](UserMaintenanceApi.md#enterpriseUserGetEnterpriseUser) | **POST** /enterpriseUser/getEnterpriseUser | Get an enterprise user
[**enterpriseUserUpdateEnterpriseUser**](UserMaintenanceApi.md#enterpriseUserUpdateEnterpriseUser) | **POST** /enterpriseUser/updateEnterpriseUser | Update an enterprise user
[**operatorUserDeleteOperatorUser**](UserMaintenanceApi.md#operatorUserDeleteOperatorUser) | **POST** /operatorUser/deleteOperatorUser | Delete an operator user
[**operatorUserGetOperatorUser**](UserMaintenanceApi.md#operatorUserGetOperatorUser) | **POST** /operatorUser/getOperatorUser | Get an operator user
[**operatorUserInsertOperatorUser**](UserMaintenanceApi.md#operatorUserInsertOperatorUser) | **POST** /operatorUser/insertOperatorUser | Insert an operator user
[**operatorUserUpdateOperatorUser**](UserMaintenanceApi.md#operatorUserUpdateOperatorUser) | **POST** /operatorUser/updateOperatorUser | Update an operator user


# **enterpriseGetEnterpriseUsers**
> \Swagger\Client\Model\EnterpriseGetEnterpriseUsersResultItem[] enterpriseGetEnterpriseUsers($body)

Get list of enterprise users by enterprise id

undefined  Privileges required:  `READ` `ENTERPRISE`  `READ` `ENTERPRISE_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseUsers(); // \Swagger\Client\Model\EnterpriseGetEnterpriseUsers | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseGetEnterpriseUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseUsers**](../Model/EnterpriseGetEnterpriseUsers.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseUsersResultItem[]**](../Model/EnterpriseGetEnterpriseUsersResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseUser**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseUserResult enterpriseInsertEnterpriseUser($body)

Insert an enterprise user

Insert an enterprise user.  Privileges required:  `CREATE` `ENTERPRISE_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NewEnterpriseUser(); // \Swagger\Client\Model\NewEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseInsertEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewEnterpriseUser**](../Model/NewEnterpriseUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseUserResult**](../Model/EnterpriseInsertEnterpriseUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyDeleteEnterpriseProxyUser**
> \Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUserResult enterpriseProxyDeleteEnterpriseProxyUser($body)

Delete an enterprise proxy admin user

Delete an enterprise proxy user by id or username. Note that `enterpriseProxyId` is a required parameter when invoking this method as an operator or partner user.  Privileges required:  `DELETE` `PROXY_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUser(); // \Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUser | 

try {
    $result = $apiInstance->enterpriseProxyDeleteEnterpriseProxyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseProxyDeleteEnterpriseProxyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUser**](../Model/EnterpriseProxyDeleteEnterpriseProxyUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUserResult**](../Model/EnterpriseProxyDeleteEnterpriseProxyUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyUser**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser enterpriseProxyGetEnterpriseProxyUser($body)

Get an enterprise proxy user

Get an enterprise proxy user by id or username.  Privileges required:  `READ` `PROXY_USER`  `READ` `PROXY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseProxyGetEnterpriseProxyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser**](../Model/EnterpriseProxyGetEnterpriseProxyUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser**](../Model/EnterpriseProxyGetEnterpriseProxyUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyUsers**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsersResultItem[] enterpriseProxyGetEnterpriseProxyUsers($body)

Get all enterprise proxy admin users

undefined  Privileges required:  `READ` `ENTERPRISE`  `READ` `PROXY_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsers(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsers | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseProxyGetEnterpriseProxyUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsers**](../Model/EnterpriseProxyGetEnterpriseProxyUsers.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsersResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyUsersResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyInsertEnterpriseProxyUser**
> \Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyUserResult enterpriseProxyInsertEnterpriseProxyUser($body)

Create a new partner admin user

Create a new partner admin user  Privileges required:  `CREATE` `PROXY_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NewEnterpriseProxyUser(); // \Swagger\Client\Model\NewEnterpriseProxyUser | 

try {
    $result = $apiInstance->enterpriseProxyInsertEnterpriseProxyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseProxyInsertEnterpriseProxyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewEnterpriseProxyUser**](../Model/NewEnterpriseProxyUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyUserResult**](../Model/EnterpriseProxyInsertEnterpriseProxyUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyUpdateEnterpriseProxyUser**
> \Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUserResult enterpriseProxyUpdateEnterpriseProxyUser($body)

Update an enterprise proxy admin user

Update an enterprise proxy admin user  Privileges required:  `UPDATE` `PROXY_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUser(); // \Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUser | 

try {
    $result = $apiInstance->enterpriseProxyUpdateEnterpriseProxyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseProxyUpdateEnterpriseProxyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUser**](../Model/EnterpriseProxyUpdateEnterpriseProxyUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUserResult**](../Model/EnterpriseProxyUpdateEnterpriseProxyUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUserDeleteEnterpriseUser**
> \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUserResult enterpriseUserDeleteEnterpriseUser($body)

Delete an enterprise user.

Delete an enterprise user by id or username. Note that `enterpriseId` is a required parameter when invoking this method as an operator or partner user.  Privileges required:  `DELETE` `ENTERPRISE_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserDeleteEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseUserDeleteEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser**](../Model/EnterpriseUserDeleteEnterpriseUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUserResult**](../Model/EnterpriseUserDeleteEnterpriseUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUserGetEnterpriseUser**
> \Swagger\Client\Model\EnterpriseUserGetEnterpriseUserResult enterpriseUserGetEnterpriseUser($body)

Get an enterprise user

Get an enterprise user by id or username.  Privileges required:  `READ` `ENTERPRISE_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserGetEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserGetEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserGetEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseUserGetEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUserGetEnterpriseUser**](../Model/EnterpriseUserGetEnterpriseUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUserGetEnterpriseUserResult**](../Model/EnterpriseUserGetEnterpriseUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUserUpdateEnterpriseUser**
> \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUserResult enterpriseUserUpdateEnterpriseUser($body)

Update an enterprise user

Update an enterprise user provided an object `id` or other identifying attributes, and an `_update` object with the names and values of columns to be updated.  Privileges required:  `UPDATE` `ENTERPRISE_USER`, or  `UPDATE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserUpdateEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->enterpriseUserUpdateEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser**](../Model/EnterpriseUserUpdateEnterpriseUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUserResult**](../Model/EnterpriseUserUpdateEnterpriseUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserDeleteOperatorUser**
> \Swagger\Client\Model\OperatorUserDeleteOperatorUserResult operatorUserDeleteOperatorUser($body)

Delete an operator user

Delete an operator user object by `id` or `username`.  Privileges required:  `DELETE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserDeleteOperatorUser(); // \Swagger\Client\Model\OperatorUserDeleteOperatorUser | 

try {
    $result = $apiInstance->operatorUserDeleteOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->operatorUserDeleteOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserDeleteOperatorUser**](../Model/OperatorUserDeleteOperatorUser.md)|  |

### Return type

[**\Swagger\Client\Model\OperatorUserDeleteOperatorUserResult**](../Model/OperatorUserDeleteOperatorUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserGetOperatorUser**
> \Swagger\Client\Model\OperatorUserGetOperatorUserResult operatorUserGetOperatorUser($body)

Get an operator user

Get an operator user object by `id` or `username`.  Privileges required:  `READ` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserGetOperatorUser(); // \Swagger\Client\Model\OperatorUserGetOperatorUser | 

try {
    $result = $apiInstance->operatorUserGetOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->operatorUserGetOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserGetOperatorUser**](../Model/OperatorUserGetOperatorUser.md)|  |

### Return type

[**\Swagger\Client\Model\OperatorUserGetOperatorUserResult**](../Model/OperatorUserGetOperatorUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserInsertOperatorUser**
> \Swagger\Client\Model\OperatorUserGetOperatorUserResult operatorUserInsertOperatorUser($body)

Insert an operator user

Insert an operator user and associate with an operator's network.  Privileges required:  `CREATE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserInsertOperatorUser(); // \Swagger\Client\Model\OperatorUserInsertOperatorUser | 

try {
    $result = $apiInstance->operatorUserInsertOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->operatorUserInsertOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserInsertOperatorUser**](../Model/OperatorUserInsertOperatorUser.md)|  |

### Return type

[**\Swagger\Client\Model\OperatorUserGetOperatorUserResult**](../Model/OperatorUserGetOperatorUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserUpdateOperatorUser**
> \Swagger\Client\Model\OperatorUserUpdateOperatorUserResult operatorUserUpdateOperatorUser($body)

Update an operator user

Update an operator user provided an object `id` or `username`, and an `_update` object containing the names and values, of columns to be updated.  Privileges required:  `UPDATE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserUpdateOperatorUser(); // \Swagger\Client\Model\OperatorUserUpdateOperatorUser | 

try {
    $result = $apiInstance->operatorUserUpdateOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintenanceApi->operatorUserUpdateOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserUpdateOperatorUser**](../Model/OperatorUserUpdateOperatorUser.md)|  |

### Return type

[**\Swagger\Client\Model\OperatorUserUpdateOperatorUserResult**](../Model/OperatorUserUpdateOperatorUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

