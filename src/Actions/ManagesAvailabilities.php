<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesAvailabilities
{
    /**
     * getAvailabilities
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getAvailabilities(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Availabilities.get",
            $request->getValidatedData()
        )['result'];
    }
}
