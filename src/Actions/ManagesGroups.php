<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesGroups
{
    /**
     * getGroups
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getGroups(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Groups.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setGroups
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setGroups(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Groups.set",
            $request->getValidatedData()
        )['result'];
    }
}
