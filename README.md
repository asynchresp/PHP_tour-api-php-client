# tour-api-php-client

PHP client library for Hotelspro Tours&Activities API


# Requirements

PHP 5.3 and later.

# Installation

### Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require metglobal/tour-api-php-client
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

# Usage

```
$options = new \Hotelspro\Options();
$options->setApiKey("your api key");
$options->setSecretKey("your secret key");
$options->setBaseUrl("https://tour-api-test.hotelspro.com");

$request = new \Hotelspro\Request\CreateSearchRequest();
$request->setDestinationCode("c6196831");
$request->setStartDate("2018-01-01");
$request->setEndDate("2018-12-31");

$searchResult = \Hotelspro\Model\Search::create($request, $options);
```

# Testing
