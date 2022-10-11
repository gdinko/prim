<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesServices
{
    /**
     * getServices
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getServices(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Services.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setServices
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setServices(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Services.set",
            $request->getValidatedData()
        )['result'];
    }
}
