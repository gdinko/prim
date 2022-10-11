<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesBlanks
{
    /**
     * getBlanks
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getBlanks(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Blanks.get",
            $request->getValidatedData()
        )['result'];
    }
}
