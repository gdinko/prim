<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesFinDoc
{    
    /**
     * getFinDoc
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getFinDoc(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.FinDoc.get",
            $request->getValidatedData()
        )['result'];
    }
    
    /**
     * createIncomeFinDocFinDoc
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createIncomeFinDocFinDoc(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.FinDoc.createIncomeFinDoc",
            $request->getValidatedData()
        )['result'];
    }
    
    /**
     * createExpenseFinDocFinDoc
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function createExpenseFinDocFinDoc(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.FinDoc.createExpenseFinDoc",
            $request->getValidatedData()
        )['result'];
    }
    
    /**
     * annulFinDocFinDoc
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function annulFinDocFinDoc(PrimRequestInterface $request){
        return $this->post(
            "RPC.common.Api.FinDoc.annulFinDoc",
            $request->getValidatedData()
        )['result'];
    }
}
