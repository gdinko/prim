<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesStores
{
    /**
     * getStores
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getStores(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Stores.get",
            $request->getValidatedData()
        )['result'];
    }
}
