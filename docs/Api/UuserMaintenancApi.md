# Swagger\Client\UuserMaintenancApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseUserUpdateEnterpriseUser**](UuserMaintenancApi.md#enterpriseUserUpdateEnterpriseUser) | **POST** /enterpriseUser/updateEnterpriseUser | Update an enterprise user


# **enterpriseUserUpdateEnterpriseUser**
> \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUserResult enterpriseUserUpdateEnterpriseUser($body)

Update an enterprise user

Update an enterprise user provided an object `id` or other identifying attributes, and an `_update` object with the names and values of columns to be updated.  Privileges required:  `UPDATE` `ENTERPRISE_USER`, or  `UPDATE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UuserMaintenancApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserUpdateEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UuserMaintenancApi->enterpriseUserUpdateEnterpriseUser: ', $e->getMessage(), PHP_EOL;
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

