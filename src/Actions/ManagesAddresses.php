<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesAddresses
{    
    /**
     * getAddresses
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getAddresses(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Addresses.get",
            $request->getValidatedData()
        )['result'];
    }
    
    /**
     * setAddresses
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setAddresses(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Addresses.set",
            $request->getValidatedData()
        )['result'];
    }
}
