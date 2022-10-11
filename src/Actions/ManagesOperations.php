<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesOperations
{
    /**
     * getOperations
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getOperations(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Operations.get",
            $request->getValidatedData()
        )['result'];
    }
}
