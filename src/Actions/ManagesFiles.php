<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesFiles
{
    /**
     * getFiles
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  boolean $wantAll
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */

    public function getFiles(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.Files.get",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }
}
