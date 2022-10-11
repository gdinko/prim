<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesSoOrderTypes
{    
    /**
     * getSoOrderTypes
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getSoOrderTypes(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.SoOrderTypes.get",
            $request->getValidatedData()
        )['result'];
    }
}
