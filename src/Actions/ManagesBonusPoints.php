<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesBonusPoints 
{    
    /**
     * getBonusPoints
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getBonusPoints(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.BonusPoints.get",
            $request->getValidatedData()
        )['result'];
    }
}
