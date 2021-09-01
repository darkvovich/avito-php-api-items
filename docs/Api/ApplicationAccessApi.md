# Swagger\Client\ApplicationAccessApi

All URIs are relative to *https://api.avito.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccessTokenAuthorizationCode**](ApplicationAccessApi.md#getaccesstokenauthorizationcode) | **GET** /token‎ | Получение access token
[**refreshAccessTokenAuthorizationCode**](ApplicationAccessApi.md#refreshaccesstokenauthorizationcode) | **GET** /token‎‎ | Обновление access token

# **getAccessTokenAuthorizationCode**
> \Swagger\Client\Model\InlineResponse2003 getAccessTokenAuthorizationCode($grant_type, $client_id, $client_secret, $code)

Получение access token

Получения временного ключа для авторизации запроса от лица пользователя

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApplicationAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = "authorization_code"; // string | Тип OAuth flow. Строка authorization_code
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$code = "code_example"; // string | 

try {
    $result = $apiInstance->getAccessTokenAuthorizationCode($grant_type, $client_id, $client_secret, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationAccessApi->getAccessTokenAuthorizationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| Тип OAuth flow. Строка authorization_code | [default to authorization_code]
 **client_id** | **string**|  |
 **client_secret** | **string**|  |
 **code** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshAccessTokenAuthorizationCode**
> \Swagger\Client\Model\InlineResponse2004 refreshAccessTokenAuthorizationCode($grant_type, $client_id, $client_secret, $refresh_token)

Обновление access token

Обновление временного ключа для авторизации запроса от лица пользователя

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApplicationAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = "refresh_token"; // string | Тип OAuth flow. Строка refresh_token
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$refresh_token = "refresh_token_example"; // string | 

try {
    $result = $apiInstance->refreshAccessTokenAuthorizationCode($grant_type, $client_id, $client_secret, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationAccessApi->refreshAccessTokenAuthorizationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| Тип OAuth flow. Строка refresh_token | [default to refresh_token]
 **client_id** | **string**|  |
 **client_secret** | **string**|  |
 **refresh_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

