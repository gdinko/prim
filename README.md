# Laravel Prim API Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gdinko/prim.svg?style=flat-square)](https://packagist.org/packages/gdinko/prim)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/gdinko/prim/run-tests?label=tests)](https://github.com/gdinko/prim/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/gdinko/prim/Check%20&%20fix%20styling?label=code%20style)](https://github.com/gdinko/prim/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/gdinko/prim.svg?style=flat-square)](https://packagist.org/packages/gdinko/prim)

[Prim JSON API Documentation](https://prim.bg)

## Installation

You can install the package via composer:

```bash
composer require gdinko/prim
```

If you plan to use database for storing request / error logs:

```bash
php artisan migrate --step
```

If you need to export configuration file:

```bash
php artisan vendor:publish --tag=prim-config
```

If you need to export migrations:

```bash
php artisan vendor:publish --tag=prim-migrations
```

If you need to export models:

```bash
php artisan vendor:publish --tag=prim-models
```

If you need to export commands:

```bash
php artisan vendor:publish --tag=prim-commands
```

## Configuration

Add this to .env file:

```bash
PRIM_API_TOKEN= #Get API token from prim.bg
PRIM_API_BASE_URL=  #Get API Base URL from prim.bg
PRIM_API_TIMEOUT= #default 30
PRIM_ENABLE_REQUEST_LOG=true/false #default false | log every request/response in database
PRIM_ENABLE_ERROR_LOG=true/false #default true | log every error response in database
```

## Usage

### Runtime Setup
```php
Prim::setApiToken('token');
Prim::getApiToken();
Prim::setBaseUrl('endpoint');
Prim::getBaseUrl();
Prim::setTimeout(99);
Prim::getTimeout();
Prim::enableRequestLog();
Prim::disableRequestLog();
Prim::enableErrorLog();
Prim::disableErrorLog();
```

### Methods
```php
Prim::getAccounts(PrimRequestInterface $request): array
Prim::setAddresses(PrimRequestInterface $request): array
Prim::getExpenseAllocations(PrimRequestInterface $request): array

//list all API methods and params
Prim::getAllMethods(): array

//get info about method params
Prim::getMethodParams($method, $verb): array

//auto generate validation rules for API method
Prim::getValidationRules($method, $verb): array

Prim::getAvailabilities(PrimRequestInterface $request): array
Prim::getAvailabilitiesByLabels(PrimRequestInterface $request): array
Prim::getBlanks(PrimRequestInterface $request): array
Prim::getBonusPoints(PrimRequestInterface $request): array
Prim::setBrands(PrimRequestInterface $request): array
Prim::getClientTypes(PrimRequestInterface $request): array
Prim::setContacts(PrimRequestInterface $request): array
Prim::getCurrencies(PrimRequestInterface $request): array
Prim::getDeliveryTypes(PrimRequestInterface $request): array
Prim::getDocInfo(PrimRequestInterface $request): array
Prim::getFiles(PrimRequestInterface $request): array
Prim::annulFinDocFinDoc(PrimRequestInterface $request): array
Prim::setGroups(PrimRequestInterface $request): array
Prim::getInterationSystems(PrimRequestInterface $request): array
Prim::setInvoice(PrimRequestInterface $request): array
Prim::setItems(PrimRequestInterface $request): array
Prim::getListOperation(PrimRequestInterface $request): array
Prim::setMeasures(PrimRequestInterface $request): array
Prim::getOperations(PrimRequestInterface $request): array
Prim::getParams(PrimRequestInterface $request): array
Prim::setPartners(PrimRequestInterface $request): array
Prim::getPayTypes(PrimRequestInterface $request): array
Prim::fullAnnulPoPo(PrimRequestInterface $request): array
Prim::getPos(PrimRequestInterface $request): array
Prim::setPrices(PrimRequestInterface $request): array
Prim::getPricesLists(PrimRequestInterface $request): array
Prim::setServices(PrimRequestInterface $request): array
Prim::getSoInvoicePdfSo(PrimRequestInterface $request): array
Prim::getSoOrderTypes(PrimRequestInterface $request): array
Prim::deleteStoreIn(PrimRequestInterface $request): array
Prim::deleteStoreOut(PrimRequestInterface $request): array
Prim::getStores(PrimRequestInterface $request): array
Prim::getTaxDeals(PrimRequestInterface $request): array
Prim::getTaxInstances(PrimRequestInterface $request): array
Prim::getVendorTypes(PrimRequestInterface $request): array
```

### Commands

```bash
#get prim api status (use -h to view options)
#need to run migrations for this command to store data
php artisan prim:api-status
```

### Models
```php
PrimApiStatus
PrimLog
PrimErrorLog
```

### Events

```php
PrimHookEvent
```

### Interfaces
If you need to make custom PrimRequest you need to implement this interface
```php
PrimRequestInterface
```

### Requests
Implements PrimRequestInterface

```php
PrimRequest
```

### Request Example
```php
$pr = new PrimRequest(
    ['code' => 'Code', 'name' => 'Name'],  //request data
    false, //get all | true / false
    Prim::getValidationRules('RPC.common.Api.Accounts', 'get') // auto generate validation rules | or skip this param | or pass custom validation rules
)
```

## Listen for Prim Hook Event

1. In Prim Dashboard subscribe for Hook and set YOUR API HOOK URL: 
[your domain]/api/prim/hook?api_token=[laravel:sanctum:token]

```php
//subscribe to PrimHookEvent in EventServiceProvider->boot method
//https://laravel.com/docs/9.x/events
Event::listen(function (PrimHookEvent $event) {

    //do something cool with prim payload
    dd($event->payload);
});
```

## Examples

### Get All Prim API Methods
```php
use Gdinko\Prim\Facades\Prim;
use Gdinko\Prim\Exceptions\PrimException;
use Gdinko\Prim\Exceptions\PrimValidationException;

try {
    $methods = Prim::getAllMethods();
    dd($methods);
} catch (PrimException | PrimValidationException $pe) {
    echo class_basename($pe) . '<br />';
    echo $pe->getCode() . '<br />';
    echo $pe->getMessage() . '<br />';
    dd($pe->getErrors());
} catch (\Exception $e) {
    echo class_basename($e) . '<br />';
    echo $e->getCode() . '<br />';
    echo $e->getMessage() . '<br />';
}
```

### Get All Accounts  
**This example usage is valid for all methods*
```php
use Gdinko\Prim\Facades\Prim;
use Gdinko\Prim\Exceptions\PrimException;
use Gdinko\Prim\Exceptions\PrimValidationException;

try {
    $accounts = Prim::getAccounts(
        new PrimRequest(
            [], //empty params
            true, //get all flag
        )
    );

    dd($accounts);
} catch (PrimException | PrimValidationException $pe) {
    echo class_basename($pe) . '<br />';
    echo $pe->getCode() . '<br />';
    echo $pe->getMessage() . '<br />';
    dd($pe->getErrors());
} catch (\Exception $e) {
    echo class_basename($e) . '<br />';
    echo $e->getCode() . '<br />';
    echo $e->getMessage() . '<br />';
}
```

### Search for Accounts with autogenerated request validation rules  
**This example usage is valid for all methods*
```php
use Gdinko\Prim\Facades\Prim;
use Gdinko\Prim\Exceptions\PrimException;
use Gdinko\Prim\Exceptions\PrimValidationException;

try {
    $accounts = Prim::getAccounts(
        new PrimRequest(
            ['code' => 'CoDe', 'name' => 'NaMe'], //request params
            false, //dot not return all
            Prim::getValidationRules('RPC.common.Api.Accounts', 'get') //auto generate validation rules
        )
    );

    dd($accounts);
} catch (PrimException | PrimValidationException $pe) {
    echo class_basename($pe) . '<br />';
    echo $pe->getCode() . '<br />';
    echo $pe->getMessage() . '<br />';
    dd($pe->getErrors());
} catch (\Exception $e) {
    echo class_basename($e) . '<br />';
    echo $e->getCode() . '<br />';
    echo $e->getMessage() . '<br />';
}
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dinko359@gmail.com instead of using the issue tracker.

## Credits

-   [Dinko Georgiev](https://github.com/gdinko)
-   [silabg.com](https://www.silabg.com/) :heart:
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.