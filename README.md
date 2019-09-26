## Easy Paginator

Simple generate paginate custom Laravel, with any array.
When not possible use standard pagination of eloquent methods use this package.

### Installation

Installation by composer require

```php 
composer require firmino/easy-paginator 
```
Installation manually, add in file composer.json

```json
{
    "require": {
        "firmino/easy-paginator": "1.0.9"
    }
}
```
### Configuration laravel 5.5+

Laravel's package discovery will take care of integration for you.

### Configuration laravel <5.5

Add the following settings to your app.php file.

```php 
'providers' => array(
    //...
    Firmino\EasyPaginator\Providers\EasyPaginatorServiceProvider::class,
),
```
and add aliases
```php
'EasyPaginator' => Firmino\EasyPaginator\Facades\EasyPaginator::class
```

### Usage

Import Facade

```php
use EasyPaginator;

// Array $items - data to generation paginate
// int $itemsCount - length array data
// int $perPage - amount of items per page
// int $currentPage - page current to show data
EasyPaginator::paginate($items, $itemsCount, $perPage, $currentPage);
```
