<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesStoreIn
{    
    /**
     * getStoreIn
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getStoreIn(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.StoreIn.get",
            $request->getValidatedData()
        )['result'];
    }
    
    /**
     * setStoreIn
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setStoreIn(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.StoreIn.set",
            $request->getValidatedData()
        )['result'];
    }
    
    /**
     * annulStoreIn
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function annulStoreIn(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.StoreIn.annul",
            $request->getValidatedData()
        )['result'];
    }
    
    /**
     * deleteStoreIn
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function deleteStoreIn(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.StoreIn.delete",
            $request->getValidatedData()
        )['result'];
    }
}
