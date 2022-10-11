<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesAllocations
{
    /**
     * getIncomeAllocations
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getIncomeAllocations(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Allocations.getIncome",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * getExpenseAllocations
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getExpenseAllocations(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Allocations.getExpense",
            $request->getValidatedData()
        )['result'];
    }
}
