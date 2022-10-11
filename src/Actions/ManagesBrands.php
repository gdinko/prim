<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesBrands
{
    /**
     * getBrands
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getBrands(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Brands.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setBrands
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setBrands(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Brands.set",
            $request->getValidatedData()
        )['result'];
    }
}
