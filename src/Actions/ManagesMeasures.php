<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesMeasures
{    
    /**
     * getMeasures
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getMeasures(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.Measures.get",
            $request->getValidatedData()
        )['result'];
    }
    
    /**
     * setMeasures
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setMeasures(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.Measures.set",
            $request->getValidatedData()
        )['result'];
    }
}
