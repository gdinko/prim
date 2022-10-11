<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesDocInfo
{
    /**
     * getDocInfo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getDocInfo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.DocInfo.get",
            $request->getValidatedData()
        )['result'];
    }
}
