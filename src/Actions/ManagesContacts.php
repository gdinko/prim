<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesContacts
{
    /**
     * getContacts
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getContacts(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Contacts.get",
            $request->getValidatedData()
        )['result'];
    }

    /**
     * setContacts
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function setContacts(PrimRequestInterface $request)
    {
        return $this->post(
            "RPC.common.Api.Contacts.set",
            $request->getValidatedData()
        )['result'];
    }
}
