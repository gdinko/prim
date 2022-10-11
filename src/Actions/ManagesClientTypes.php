<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesClientTypes
{    
    /**
     * getClientTypes
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getClientTypes(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.ClientTypes.get",
            $request->getValidatedData()
        )['result'];
    }
}
