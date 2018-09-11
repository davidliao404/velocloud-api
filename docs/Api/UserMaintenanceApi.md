# Swagger\Client\UserMaintenanceApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGetEnterpriseUsers**](UserMaintenanceApi.md#enterpriseGetEnterpriseUsers) | **POST** /enterprise/getEnterpriseUsers | Get list of enterprise users by enterprise id
[**enterpriseInsertEnterpriseUser**](UserMaintenanceApi.md#enterpriseInsertEnterpriseUser) | **POST** /enterprise/insertEnterpriseUser | Insert an enterprise user
[**enterpriseUserDeleteEnterpriseUser**](UserMaintenanceApi.md#enterpriseUserDeleteEnterpriseUser) | **POST** /enterpriseUser/deleteEnterpriseUser | Delete an enterprise user.
[**enterpriseUserGetEnterpriseUser**](UserMaintenanceApi.md#enterpriseUserGetEnterpriseUser) | **POST** /enterpriseUser/getEnterpriseUser | Get an enterprise user
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

