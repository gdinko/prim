<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesAccounts
{
    /**
     * getAccounts
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getAccounts(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Accounts.get",
            $request->getValidatedData()
        )['result'];
    }
}
