<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesTaxInstances
{
    /**
     * getTaxInstances
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getTaxInstances(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.TaxInstances.get",
            $request->getValidatedData()
        )['result'];
    }
}
