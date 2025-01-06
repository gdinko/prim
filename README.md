# Laravel Prim API Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gdinko/prim.svg?style=flat-square)](https://packagist.org/packages/gdinko/prim)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gdinko/prim/run-tests.yml?label=tests)](https://github.com/gdinko/prim/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gdinko/prim/php-cs-fixer.yml?label=code%20style)](https://github.com/gdinko/prim/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
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
//list all API methods and params
Prim::getAllMethods(): array

//get info about method params
Prim::getMethodParams($method, $verb): array

//auto generate validation rules for API method
Prim::getValidationRules($method, $verb): array

/**
* getAccounts
*
* Prim Endpoint: RPC.common.Api.Accounts.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getAccounts(PrimRequestInterface $request, $wantAll = false): array

/**
* setAddresses
*
* Prim Endpoint: RPC.common.Api.Addresses.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setAddresses(PrimRequestInterface $request, $wantAll = false): array

/**
* getExpenseAllocations
*
* Prim Endpoint: RPC.common.Api.Allocations.getExpense
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getExpenseAllocations(PrimRequestInterface $request, $wantAll = false): array

/**
* getAvailabilities
*
* Prim Endpoint: RPC.common.Api.Availabilities.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getAvailabilities(PrimRequestInterface $request, $wantAll = false): array

/**
* getAvailabilitiesByLabels
*
* Prim Endpoint: RPC.common.Api.AvailabilitiesByLabels.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getAvailabilitiesByLabels(PrimRequestInterface $request, $wantAll = false): array

/**
* getBlanks
*
* Prim Endpoint: RPC.common.Api.Blanks.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getBlanks(PrimRequestInterface $request, $wantAll = false): array

/**
* getBonusPoints
*
* Prim Endpoint: RPC.common.Api.BonusPoints.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getBonusPoints(PrimRequestInterface $request, $wantAll = false): array

/**
* setBrands
*
* Prim Endpoint: RPC.common.Api.Brands.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setBrands(PrimRequestInterface $request, $wantAll = false): array

/**
* getClientTypes
*
* Prim Endpoint: RPC.common.Api.ClientTypes.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getClientTypes(PrimRequestInterface $request, $wantAll = false): array

/**
* setContacts
*
* Prim Endpoint: RPC.common.Api.Contacts.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setContacts(PrimRequestInterface $request, $wantAll = false): array

/**
* getCurrencies
*
* Prim Endpoint: RPC.common.Api.Currencies.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getCurrencies(PrimRequestInterface $request, $wantAll = false): array

/**
* getDeliveryTypes
*
* Prim Endpoint: RPC.common.Api.DeliveryTypes.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getDeliveryTypes(PrimRequestInterface $request, $wantAll = false): array

/**
* getDocInfo
*
* Prim Endpoint: RPC.common.Api.DocInfo.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getDocInfo(PrimRequestInterface $request, $wantAll = false): array

/**
* getFiles
*
* Prim Endpoint: RPC.common.Api.Files.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getFiles(PrimRequestInterface $request, $wantAll = false): array

/**
* annulFinDocFinDoc
*
* Prim Endpoint: RPC.common.Api.FinDoc.annulFinDoc
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::annulFinDocFinDoc(PrimRequestInterface $request, $wantAll = false): array

/**
* setGroups
*
* Prim Endpoint: RPC.common.Api.Groups.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setGroups(PrimRequestInterface $request, $wantAll = false): array

/**
* getInterationSystems
*
* Prim Endpoint: RPC.common.Api.InterationSystems.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getInterationSystems(PrimRequestInterface $request, $wantAll = false): array

/**
* setInvoice
*
* Prim Endpoint: RPC.common.Api.Invoice.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setInvoice(PrimRequestInterface $request, $wantAll = false): array

/**
* setItems
*
* Prim Endpoint: RPC.common.Api.Items.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setItems(PrimRequestInterface $request, $wantAll = false): array

/**
* getListOperation
*
* Prim Endpoint: RPC.common.Api.ListOperation.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getListOperation(PrimRequestInterface $request, $wantAll = false): array

/**
* setMeasures
*
* Prim Endpoint: RPC.common.Api.Measures.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setMeasures(PrimRequestInterface $request, $wantAll = false): array

/**
* getOperations
*
* Prim Endpoint: RPC.common.Api.Operations.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getOperations(PrimRequestInterface $request, $wantAll = false): array

/**
* getParams
*
* Prim Endpoint: RPC.common.Api.Params.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getParams(PrimRequestInterface $request, $wantAll = false): array

/**
* setPartners
*
* Prim Endpoint: RPC.common.Api.Partners.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setPartners(PrimRequestInterface $request, $wantAll = false): array

/**
* getPayTypes
*
* Prim Endpoint: RPC.common.Api.PayTypes.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getPayTypes(PrimRequestInterface $request, $wantAll = false): array

/**
* fullAnnulPoPo
*
* Prim Endpoint: RPC.common.Api.Po.fullAnnulPo
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::fullAnnulPoPo(PrimRequestInterface $request, $wantAll = false): array

/**
* getPos
*
* Prim Endpoint: RPC.common.Api.Pos.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getPos(PrimRequestInterface $request, $wantAll = false): array

/**
* setPrices
*
* Prim Endpoint: RPC.common.Api.Prices.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setPrices(PrimRequestInterface $request, $wantAll = false): array

/**
* getPricesLists
*
* Prim Endpoint: RPC.common.Api.PricesLists.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getPricesLists(PrimRequestInterface $request, $wantAll = false): array

/**
* setServices
*
* Prim Endpoint: RPC.common.Api.Services.set
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::setServices(PrimRequestInterface $request, $wantAll = false): array

/**
* getSoInvoicePdfSo
*
* Prim Endpoint: RPC.common.Api.So.getSoInvoicePdf
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getSoInvoicePdfSo(PrimRequestInterface $request, $wantAll = false): array

/**
* getSoOrderTypes
*
* Prim Endpoint: RPC.common.Api.SoOrderTypes.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getSoOrderTypes(PrimRequestInterface $request, $wantAll = false): array

/**
* deleteStoreIn
*
* Prim Endpoint: RPC.common.Api.StoreIn.delete
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::deleteStoreIn(PrimRequestInterface $request, $wantAll = false): array

/**
* deleteStoreOut
*
* Prim Endpoint: RPC.common.Api.StoreOut.delete
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::deleteStoreOut(PrimRequestInterface $request, $wantAll = false): array

/**
* getStores
*
* Prim Endpoint: RPC.common.Api.Stores.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getStores(PrimRequestInterface $request, $wantAll = false): array

/**
* getTaxDeals
*
* Prim Endpoint: RPC.common.Api.TaxDeals.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getTaxDeals(PrimRequestInterface $request, $wantAll = false): array

/**
* getTaxInstances
*
* Prim Endpoint: RPC.common.Api.TaxInstances.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getTaxInstances(PrimRequestInterface $request, $wantAll = false): array

/**
* getVendorTypes
*
* Prim Endpoint: RPC.common.Api.VendorTypes.get
*
*
* @param \Gdinko\Prim\Interfaces\PrimRequestInterface $request
* @param boolean $wantAll
* @return array
*
* @throws \Gdinko\Prim\Exceptions\PrimException
* @throws \Gdinko\Prim\Exceptions\PrimValidationException
*/
Prim::getVendorTypes(PrimRequestInterface $request, $wantAll = false): array

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
PrimNoValidationRequest //no client site data validation
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
use Gdinko\Prim\Requests\PrimRequest;

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

### Get All Accounts with no client site validation request and get all prim response, not only result fields

**This example usage is valid for all methods*
```php
use Gdinko\Prim\Facades\Prim;
use Gdinko\Prim\Exceptions\PrimException;
use Gdinko\Prim\Exceptions\PrimValidationException;
use Gdinko\Prim\Requests\PrimNoValidationRequest;

try {
    $accounts = Prim::getAccounts(
        new PrimNoValidationRequest(
            [], //empty params, no client site validation only prim validation
            true, //get all flag
        ),
        true
    );

    dd($accounts);
} catch (PrimException $pe) {
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
use Gdinko\Prim\Requests\PrimRequest;

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
