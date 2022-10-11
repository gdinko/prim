<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesSo
{
    /**
     * getSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * getOneDataSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getOneDataSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.getOneData",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.set",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * createExpeditionSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createExpeditionSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.createExpedition",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * createStoreOutSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createStoreOutSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.createStoreOut",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * createCreditSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createCreditSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.createCredit",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * createFinDocSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createFinDocSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.createFinDoc",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * annulSoSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function annulSoSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.annulSo",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * fullAnnulSoSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function fullAnnulSoSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.fullAnnulSo",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * getSoInvoicePdfSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getSoInvoicePdfSo(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.So.getSoInvoicePdf",
            $request->getValidatedData()
        )['result'];
    }
}
