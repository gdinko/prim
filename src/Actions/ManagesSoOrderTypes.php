<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesSoOrderTypes
{
    /**
                     * getSoOrderTypes
                     *
                     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
                     * @param  boolean $wantAll
                     * @return array
                     * 
                     * @throws \Gdinko\Prim\Exceptions\PrimException
                     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
                     */
                    
                    public function getSoOrderTypes(PrimRequestInterface $request, $wantAll = false){
                        $response = $this->post(
                            "RPC.common.Api.SoOrderTypes.get",
                            $request->getValidatedData(),
                            $wantAll
                        );

                        return $wantAll ? $response : $response['result'] ?? [];
                    }
}
