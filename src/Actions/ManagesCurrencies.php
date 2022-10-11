<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesCurrencies
{
    /**
     * getCurrencies
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getCurrencies(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Currencies.get",
            $request->getValidatedData()
        )['result'];
    }
}
