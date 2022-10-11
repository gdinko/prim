<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesPo
{
    /**
     * getPo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getPo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Po.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * getOneDataPo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getOneDataPo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Po.getOneData",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setPo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setPo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Po.set",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * createDeliveryPo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createDeliveryPo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Po.createDelivery",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * createStoreInPo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createStoreInPo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Po.createStoreIn",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * createFinDocPo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createFinDocPo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Po.createFinDoc",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * annulPoPo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function annulPoPo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Po.annulPo",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * fullAnnulPoPo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function fullAnnulPoPo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Po.fullAnnulPo",
            $request->getValidatedData()
        )['result'];
    }
}
