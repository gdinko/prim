<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesSo
{
    /**
     * getSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function getSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.get",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * getOneDataSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function getOneDataSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.getOneData",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * setSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function setSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.set",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * createExpeditionSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function createExpeditionSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.createExpedition",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * createStoreOutSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function createStoreOutSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.createStoreOut",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * createCreditSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function createCreditSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.createCredit",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * createFinDocSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function createFinDocSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.createFinDoc",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * annulSoSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function annulSoSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.annulSo",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * fullAnnulSoSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function fullAnnulSoSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.fullAnnulSo",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * getSoInvoicePdfSo
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function getSoInvoicePdfSo(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.So.getSoInvoicePdf",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }
}
