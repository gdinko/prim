<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesPrices
{
    /**
     * getPrices
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getPrices(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Prices.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setPrices
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setPrices(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Prices.set",
            $request->getValidatedData()
        )['result'];
    }
}
