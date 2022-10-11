<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesParams
{    
    /**
     * getParams
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getParams(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.Params.get",
            $request->getValidatedData()
        )['result'];
    }
}
