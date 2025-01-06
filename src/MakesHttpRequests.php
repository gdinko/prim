<?php

namespace Gdinko\Prim;

use Gdinko\Prim\Exceptions\PrimException;
use Gdinko\Prim\Models\PrimErrorLog;
use Gdinko\Prim\Models\PrimLog;
use Illuminate\Support\Facades\Http;

trait MakesHttpRequests
{
    /**
     * get
     *
     * @param  string $url
     * @param  array $data
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function get($url, array $data = [], $wantAll = false)
    {
        return $this->request('get', $url, $data, $wantAll);
    }

    /**
     * post
     *
     * @param  string $url
     * @param  array $data
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function post($url, array $data = [], $wantAll = false)
    {
        return $this->request('post', $url, $data, $wantAll);
    }

    /**
     * request
     *
     * @param  string $verb
     * @param  string $url
     * @param  array $data
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function request($verb, $url, $data = [], $wantAll = false)
    {
        //prepare log data
        $log = [
            'url' => $url,
            'request' => $data,
        ];

        //prim requires token in url
        $urlWithToken = $this->addTokenToUrl($url);

        //make request
        $response = Http::acceptJson()
            ->timeout($this->timeout)
            ->baseUrl($this->baseUrl)
            ->{$verb}($urlWithToken, $data);

        $responseData = $response->json();

        //check if request is successful and has valid data => status = ok
        //prim always returns status 200
        if ($response->successful()) {
            if ($responseData['status'] === 'ok') {
                //save request log to database if logging is enabled
                if ($this->requestLog) {
                    $log['status'] = $response->status();
                    $log['response'] = $responseData;
                    PrimLog::create($log);
                }

                //return whole response json
                if ($wantAll) {
                    return $responseData;
                }

                //return only data part of the json response
                return $responseData['data'] ?? $responseData;
            }
        }

        //save error log to database if logging is enabled
        if ($this->errorLog) {
            $log['status'] = $response->status();
            $log['response'] = $responseData;

            PrimErrorLog::create($log);
        }

        //request failed prepare and throw exception
        if ($response->failed()) {
            //convert reponse to exception
            $e = $response->toException();

            throw new PrimException(
                $e->getMessage(),
                $e->getCode(),
                $response->json() ?: [$response->body()]
            );
        }

        //request is successful but response data is not ok
        //prepare and throw exception
        throw new PrimException(
            __('PRIM ERROR'),
            422,
            $responseData['data'] ?? $responseData
        );
    }

    /**
     * addTokenToUrl
     *
     * @param string $url The URL to which the token should be added.
     * @return string The modified URL with the token as a query parameter.
     */
    protected function addTokenToUrl($url)
    {
        $queryString = http_build_query([
            'token' => $this->apiToken
        ]);

        return $url . (parse_url($url, PHP_URL_QUERY) ? '&' : '?') . $queryString;
    }
}
