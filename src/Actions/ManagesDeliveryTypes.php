<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesDeliveryTypes
{    
    /**
     * getDeliveryTypes
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getDeliveryTypes(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.DeliveryTypes.get",
            $request->getValidatedData()
        )['result'];
    }
}
