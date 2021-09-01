# Swagger\Client\ItemApi

All URIs are relative to *https://api.avito.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemInfo**](ItemApi.md#getiteminfo) | **GET** /core/v1/accounts/{user_id}/items/{item_id}/ | Получение информации по объявлению
[**getItemsInfo**](ItemApi.md#getitemsinfo) | **GET** /core/v1/items | Получение информации по объявлениям
[**getVasPackagePrice**](ItemApi.md#getvaspackageprice) | **POST** /core/v1/accounts/{user_id}/price/vas_packages | Получение информации о стоимости пакетов дополнительных услуг
[**getVasPrices**](ItemApi.md#getvasprices) | **POST** /core/v1/accounts/{user_id}/price/vas | Получение информации о стоимости дополнительных услуг
[**itemStatsShallow**](ItemApi.md#itemstatsshallow) | **POST** /stats/v1/accounts/{user_id}/items | Получение статистики по списку объявлений
[**postCallsStats**](ItemApi.md#postcallsstats) | **POST** /core/v1/accounts/{user_id}/calls/stats/ | Получение статистики по звонкам
[**putItemVas**](ItemApi.md#putitemvas) | **PUT** /core/v1/accounts/{user_id}/items/{item_id}/vas | Применение дополнительных услуг
[**putItemVasPackageV2**](ItemApi.md#putitemvaspackagev2) | **PUT** /core/v2/accounts/{user_id}/items/{item_id}/vas_packages | Применение пакета дополнительных услуг

# **getItemInfo**
> \Swagger\Client\Model\ItemInfoAvito getItemInfo($user_id, $item_id, $authorization)

Получение информации по объявлению

Возвращает данные об объявлении - его статус, список примененных услуг  **Внимание:** для получения статистики объявления должен использоваться метод: [получение статистики по списку объявлений](#operation/itemStatsShallow)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$item_id = 789; // int | Идентификатор объявления на сайте
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->getItemInfo($user_id, $item_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Номер пользователя в Личном кабинете Авито |
 **item_id** | **int**| Идентификатор объявления на сайте |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ItemInfoAvito**](../Model/ItemInfoAvito.md)

### Authorization

[AuthorizationCode](../../README.md#AuthorizationCode), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemsInfo**
> \Swagger\Client\Model\ItemsInfoWithCategoryAvito getItemsInfo($authorization, $per_page, $page, $status, $category)

Получение информации по объявлениям

Возвращает список объявлений авторизованного пользователя - статус, категорию и ссылку на сайте

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$per_page = 25; // int | Количество записей на странице (целое число больше 0 и меньше 100)
$page = 1; // int | Номер страницы (целое число больше 0)
$status = "active"; // string | Статус объявления на сайте (можно указать несколько значений через запятую)
$category = 56; // int | Идентификатор категории объявления

try {
    $result = $apiInstance->getItemsInfo($authorization, $per_page, $page, $status, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **per_page** | **int**| Количество записей на странице (целое число больше 0 и меньше 100) | [optional] [default to 25]
 **page** | **int**| Номер страницы (целое число больше 0) | [optional] [default to 1]
 **status** | **string**| Статус объявления на сайте (можно указать несколько значений через запятую) | [optional] [default to active]
 **category** | **int**| Идентификатор категории объявления | [optional]

### Return type

[**\Swagger\Client\Model\ItemsInfoWithCategoryAvito**](../Model/ItemsInfoWithCategoryAvito.md)

### Authorization

[AuthorizationCode](../../README.md#AuthorizationCode), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVasPackagePrice**
> \Swagger\Client\Model\InlineResponse2001 getVasPackagePrice($authorization, $user_id, $body)

Получение информации о стоимости пакетов дополнительных услуг

Возвращает в ответ объект со следующей структурой: - `packages` – объект, который содержит информацию о стоимости пакетов дополнительных услуг для каждого объявления. Ключами являются идентификаторы объявлений, значениями – объекты с информацией о стоимости пакетов услуг для данного объявления:   - `x2_1` - [пакет \"до 2 раз больше просмотров на 1 день\"](https://support.avito.ru/articles/1398)   - `x2_7` - [пакет \"до 2 раз больше просмотров на 7 дней\"](https://support.avito.ru/articles/1398)   - `x5_1` - [пакет \"до 5 раз больше просмотров на 1 день\"](https://support.avito.ru/articles/1398)   - `x5_7` - [пакет \"до 5 раз больше просмотров на 7 дней\"](https://support.avito.ru/articles/1398)   - `x10_1` - [пакет \"до 10 раз больше просмотров на 1 день\"](https://support.avito.ru/articles/1398)   - `x10_7` - [пакет \"до 10 раз больше просмотров на 7 дней\"](https://support.avito.ru/articles/1398) - `errors` – идентификаторы объявлений, для которых информация не получена.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$body = new \Swagger\Client\Model\ItemIdsRequestBody(); // \Swagger\Client\Model\ItemIdsRequestBody | Набор идентификаторов объявлений на сайте

try {
    $result = $apiInstance->getVasPackagePrice($authorization, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getVasPackagePrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **user_id** | **int**| Номер пользователя в Личном кабинете Авито |
 **body** | [**\Swagger\Client\Model\ItemIdsRequestBody**](../Model/ItemIdsRequestBody.md)| Набор идентификаторов объявлений на сайте | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[AuthorizationCode](../../README.md#AuthorizationCode), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVasPrices**
> \Swagger\Client\Model\InlineResponse200 getVasPrices($authorization, $user_id, $body)

Получение информации о стоимости дополнительных услуг

Возвращает в ответ объект со следующей структурой: - `vas` – объект, который содержит информацию о стоимости дополнительных услуг для каждого объявления. Ключами являются идентификаторы объявлений, значениями – объекты с информацией о стоимости услуг для данного объявления:   - `highlight` — [услуга продвижения \"Выделить\"](https://support.avito.ru/articles/200026858)   - `xl` – [услуга продвижения \"XL-объявление\"](https://support.avito.ru/articles/685) - `errors` – идентификаторы объявлений, для которых информация не получена.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$body = new \Swagger\Client\Model\ItemIdsRequestBody(); // \Swagger\Client\Model\ItemIdsRequestBody | Набор идентификаторов объявлений на сайте

try {
    $result = $apiInstance->getVasPrices($authorization, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getVasPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **user_id** | **int**| Номер пользователя в Личном кабинете Авито |
 **body** | [**\Swagger\Client\Model\ItemIdsRequestBody**](../Model/ItemIdsRequestBody.md)| Набор идентификаторов объявлений на сайте | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[AuthorizationCode](../../README.md#AuthorizationCode), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemStatsShallow**
> \Swagger\Client\Model\StatisticsResponse itemStatsShallow($authorization, $user_id, $body)

Получение статистики по списку объявлений

Получение счетчиков по переданному списку объявлений пользователя.  **Внимание:** в запросе может быть передано не более 200 идентификаторов объявлений.  **Внимание:** глубина такого запроса ограничена 270 днями.  ### Счетчики * ~~views - общее число просмотров объявления;~~ __DEPRECATED (будет удалено в апреле 2021 г.).__ Используйте поле uniqViews. * uniqViews - число уникальных пользователей, просмотревших объявление; * ~~contacts - число контактов [1];~~ __DEPRECATED (будет удалено в апреле 2021 г.).__ Используйте поле uniqContacts. * uniqContacts - число уникальных пользователей, совершивших контакты [1]; * ~~favorites - число добавлений объявления в \"избранное\";~~ __DEPRECATED (будет удалено в апреле 2021 г.).__ Используйте поле uniqFavorites. * uniqFavorites - число уникальных пользователей, добавивших объявление в \"избранное\".  ### Группировка счетчиков Счетчики могут быть сгруппированы [2] по: * дням; * неделям - в поле `date` соответствующей структуры будет первый день недели; * месяцам - в поле `date` соответствующей структуры будет первый день месяца.  #### Период группировки Период группировки передается в теле запроса в поле `group_by`. Доступные значения этого поля: * \"day\" (по умолчанию) - без группировки; * \"week\" - суммирование счетчиков за неделю; * \"month\" - суммирование счетчиков за месяц.  ### Примечания * [1]: Под контактом понимаются: запросы телефона продавца, начатый чат с продавцом по конкретному объявлению, отклик на резюме и пр. * [2]: Группировка уникальных пользователей происходит только в рамках одного дня.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Идентификатор пользователя (клиента)
$body = new \Swagger\Client\Model\StatisticsShallowRequestBody(); // \Swagger\Client\Model\StatisticsShallowRequestBody | Набор параметров в теле запроса.

try {
    $result = $apiInstance->itemStatsShallow($authorization, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemStatsShallow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **user_id** | **int**| Идентификатор пользователя (клиента) |
 **body** | [**\Swagger\Client\Model\StatisticsShallowRequestBody**](../Model/StatisticsShallowRequestBody.md)| Набор параметров в теле запроса. | [optional]

### Return type

[**\Swagger\Client\Model\StatisticsResponse**](../Model/StatisticsResponse.md)

### Authorization

[AuthorizationCode](../../README.md#AuthorizationCode), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCallsStats**
> \Swagger\Client\Model\CallsStatsResponse postCallsStats($body, $authorization, $user_id)

Получение статистики по звонкам

Получение агрегированной статистики звонков, полученных пользователем

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CallsStatsRequest(); // \Swagger\Client\Model\CallsStatsRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито

try {
    $result = $apiInstance->postCallsStats($body, $authorization, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->postCallsStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CallsStatsRequest**](../Model/CallsStatsRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |
 **user_id** | **int**| Номер пользователя в Личном кабинете Авито |

### Return type

[**\Swagger\Client\Model\CallsStatsResponse**](../Model/CallsStatsResponse.md)

### Authorization

[AuthorizationCode](../../README.md#AuthorizationCode), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putItemVas**
> \Swagger\Client\Model\VasApplyAvito putItemVas($authorization, $user_id, $item_id, $body)

Применение дополнительных услуг

Применение дополнительной услуги к объявлению, в ответе возвращает данные о примененной услуге и сумму списания. [Более подробная информация по дополнительным услугам](https://support.avito.ru/sections/200009758)  **Внимание:** получение ошибки при выполнении этой операции не означает, что услуга точно не была куплена. В этом случае рекомендуется подождать несколько минут и проверить, что услуга отсутствует в списке применённых, а только затем повторить попытку.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$item_id = 789; // int | Идентификатор объявления на сайте
$body = new \Swagger\Client\Model\VasIdRequestBody(); // \Swagger\Client\Model\VasIdRequestBody | 

try {
    $result = $apiInstance->putItemVas($authorization, $user_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->putItemVas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **user_id** | **int**| Номер пользователя в Личном кабинете Авито |
 **item_id** | **int**| Идентификатор объявления на сайте |
 **body** | [**\Swagger\Client\Model\VasIdRequestBody**](../Model/VasIdRequestBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\VasApplyAvito**](../Model/VasApplyAvito.md)

### Authorization

[AuthorizationCode](../../README.md#AuthorizationCode), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putItemVasPackageV2**
> \Swagger\Client\Model\VasAmountAvito putItemVasPackageV2($authorization, $user_id, $item_id, $body)

Применение пакета дополнительных услуг

Применение пакета дополнительных услуг к объявлению, в ответе возвращает сумму списания.  **Внимание:** получение ошибки при выполнении этой операции не означает, что пакет точно не была куплен. В этом случае рекомендуется подождать несколько минут и проверить, что пакет отсутствует в списке применённых, а только затем повторить попытку.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$item_id = 789; // int | Идентификатор объявления на сайте
$body = new \Swagger\Client\Model\PackageIdRequestBodyV2(); // \Swagger\Client\Model\PackageIdRequestBodyV2 | 

try {
    $result = $apiInstance->putItemVasPackageV2($authorization, $user_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->putItemVasPackageV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **user_id** | **int**| Номер пользователя в Личном кабинете Авито |
 **item_id** | **int**| Идентификатор объявления на сайте |
 **body** | [**\Swagger\Client\Model\PackageIdRequestBodyV2**](../Model/PackageIdRequestBodyV2.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\VasAmountAvito**](../Model/VasAmountAvito.md)

### Authorization

[AuthorizationCode](../../README.md#AuthorizationCode), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

