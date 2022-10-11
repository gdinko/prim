<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesItems
{
    /**
     * getItems
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getItems(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Items.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setItems
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setItems(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Items.set",
            $request->getValidatedData()
        )['result'];
    }
}
