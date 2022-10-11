<?php

namespace Gdinko\Prim;

class Prim
{
    use MakesHttpRequests;
    use Actions\ManagesAccounts;
    use Actions\ManagesAddresses;
    use Actions\ManagesAllocations;
    use Actions\ManagesApiCommon;
    use Actions\ManagesAvailabilities;
    use Actions\ManagesAvailabilitiesByLabels;
    use Actions\ManagesBlanks;
    use Actions\ManagesBonusPoints;
    use Actions\ManagesBrands;
    use Actions\ManagesClientTypes;
    use Actions\ManagesContacts;
    use Actions\ManagesCurrencies;
    use Actions\ManagesDeliveryTypes;
    use Actions\ManagesDocInfo;
    use Actions\ManagesFiles;
    use Actions\ManagesFinDoc;
    use Actions\ManagesGroups;
    use Actions\ManagesInterationSystems;
    use Actions\ManagesInvoice;
    use Actions\ManagesItems;
    use Actions\ManagesListOperation;
    use Actions\ManagesMeasures;
    use Actions\ManagesOperations;
    use Actions\ManagesParams;
    use Actions\ManagesPartners;
    use Actions\ManagesPayTypes;
    use Actions\ManagesPo;
    use Actions\ManagesPos;
    use Actions\ManagesPrices;
    use Actions\ManagesPricesLists;
    use Actions\ManagesServices;
    use Actions\ManagesSo;
    use Actions\ManagesSoOrderTypes;
    use Actions\ManagesStoreIn;
    use Actions\ManagesStoreOut;
    use Actions\ManagesStores;
    use Actions\ManagesTaxDeals;
    use Actions\ManagesTaxInstances;
    use Actions\ManagesVendorTypes;

    /**
     * apiToken
     *
     * @var string
     */
    protected $apiToken;

    /**
     * baseUrl
     *
     * @var string
     */
    protected $baseUrl;

    /**
     * timeout
     *
     * @var int
     */
    protected $timeout;

    /**
     * requestLog
     *
     * @var bool
     */
    protected $requestLog;

    /**
     * errorLog
     *
     * @var bool
     */
    protected $errorLog;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->apiToken = config('prim.api_token');

        $this->timeout = config('prim.timeout');

        $this->baseUrl = config('prim.base_url');

        $this->requestLog = config('prim.enable_request_log');

        $this->errorLog = config('prim.enable_error_log');
    }

    /**
     * setApiToken
     *
     * @param  string $apiToken
     * @return void
     */
    public function setApiToken(string $apiToken): void
    {
        $this->apiToken = $apiToken;
    }

    /**
     * getApiToken
     *
     * @param  string $apiToken
     * @return string
     */
    public function getApiToken(): string
    {
        return $this->apiToken;
    }

    /**
     * setBaseUrl
     *
     * @param  string $baseUrl
     * @return void
     */
    public function setBaseUrl(string $baseUrl): void
    {
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    /**
     * getBaseUrl
     *
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * setTimeout
     *
     * @param  int $timeout
     * @return void
     */
    public function setTimeout(int $timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * getTimeout
     *
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * enableRequestLog
     *
     * @return void
     */
    public function enableRequestLog()
    {
        $this->requestLog = true;
    }

    /**
     * disableRequestLog
     *
     * @return void
     */
    public function disableRequestLog()
    {
        $this->requestLog = false;
    }

    /**
     * enableErrorLog
     *
     * @return void
     */
    public function enableErrorLog()
    {
        $this->errorLog = true;
    }

    /**
     * disableErrorLog
     *
     * @return void
     */
    public function disableErrorLog()
    {
        $this->errorLog = false;
    }
}
