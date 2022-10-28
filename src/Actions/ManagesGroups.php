<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesGroups
{
    /**
     * getGroups
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  boolean $wantAll
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */

    public function getGroups(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.Groups.get",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * setGroups
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  boolean $wantAll
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */

    public function setGroups(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.Groups.set",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }
}
