# StatisticsCountersStats

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contacts** | **int** | __DEPRECATED (будет удалено в апреле 2021 г.).__ __Используйте поле uniqContacts.__ Запросы контактов объявления. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Дата (в формате YYYY-MM-DD), за которую посчитаны статистические счетчики. Для группировок по периодам - дата начала периода. | 
**favorites** | **int** | __DEPRECATED (будет удалено в апреле 2021 г.).__ __Используйте поле uniqFavorites.__ Добавления объявления в избранное | [optional] 
**uniq_contacts** | **int** | Уникальные пользрователи, запрашивавшие контакты объявления | [optional] 
**uniq_favorites** | **int** | Уникальные пользователи, добавившие объявление в избранное | [optional] 
**uniq_views** | **int** | Уникальные пользователи, просматривавшие объявления | [optional] 
**views** | **int** | __DEPRECATED (будет удалено в апреле 2021 г.).__ __Используйте поле uniqViews.__ Просмотры объявления. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

