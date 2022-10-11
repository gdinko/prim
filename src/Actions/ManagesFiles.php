<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesFiles 
{    
    /**
     * getFiles
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getFiles(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.Files.get",
            $request->getValidatedData()
        )['result'];
    }
}
