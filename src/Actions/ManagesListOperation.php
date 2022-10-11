<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesListOperation
{
    /**
     * getListOperation
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getListOperation(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.ListOperation.get",
            $request->getValidatedData()
        )['result'];
    }
}
