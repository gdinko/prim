<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesAvailabilitiesByLabels
{    
    /**
     * getAvailabilitiesByLabels
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getAvailabilitiesByLabels(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.AvailabilitiesByLabels.get",
            $request->getValidatedData()
        )['result'];
    }
}
