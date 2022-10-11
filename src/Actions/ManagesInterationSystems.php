<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesInterationSystems
{    
    /**
     * getInterationSystems
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getInterationSystems(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.InterationSystems.get",
            $request->getValidatedData()
        )['result'];
    }
}
