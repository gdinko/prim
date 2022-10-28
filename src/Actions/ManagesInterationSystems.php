<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesInterationSystems
{
    /**
     * getInterationSystems
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function getInterationSystems(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.InterationSystems.get",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }
}
