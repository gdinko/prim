<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesPos
{
    /**
     * getPos
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getPos(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Pos.get",
            $request->getValidatedData()
        )['result'];
    }
}
