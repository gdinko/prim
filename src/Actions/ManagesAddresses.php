<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesAddresses
{
    /**
     * getAddresses
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  boolean $wantAll
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */

    public function getAddresses(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.Addresses.get",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * setAddresses
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  boolean $wantAll
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */

    public function setAddresses(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.Addresses.set",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }
}
