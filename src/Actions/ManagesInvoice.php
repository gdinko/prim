<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesInvoice
{
    /**
     * setInvoice
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setInvoice(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Invoice.set",
            $request->getValidatedData()
        )['result'];
    }
}
