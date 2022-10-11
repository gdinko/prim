<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesPartners
{
    /**
     * getPartners
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getPartners(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Partners.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setPartners
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setPartners(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Partners.set",
            $request->getValidatedData()
        )['result'];
    }
}
