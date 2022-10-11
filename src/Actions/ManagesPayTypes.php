<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesPayTypes
{
    /**
     * getPayTypes
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getPayTypes(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.PayTypes.get",
            $request->getValidatedData()
        )['result'];
    }
}
