<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesTaxDeals
{    
    /**
     * getTaxDeals
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getTaxDeals(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.TaxDeals.get",
            $request->getValidatedData()
        )['result'];
    }
}
