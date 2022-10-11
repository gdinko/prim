<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesStoreOut
{
    /**
     * getStoreOut
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getStoreOut(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.StoreOut.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setStoreOut
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setStoreOut(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.StoreOut.set",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * annulStoreOut
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function annulStoreOut(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.StoreOut.annul",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * deleteStoreOut
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function deleteStoreOut(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.StoreOut.delete",
            $request->getValidatedData()
        )['result'];
    }
}
