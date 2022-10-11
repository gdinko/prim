<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesVendorTypes
{    
    /**
     * getVendorTypes
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getVendorTypes(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.VendorTypes.get",
            $request->getValidatedData()
        )['result'];
    }
}
