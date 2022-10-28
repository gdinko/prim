<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesClientTypes
{
    /**
     * getClientTypes
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function getClientTypes(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.ClientTypes.get",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }
}
