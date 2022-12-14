<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesContacts
{
    /**
     * getContacts
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function getContacts(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.Contacts.get",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }

    /**
     * setContacts
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function setContacts(PrimRequestInterface $request, $wantAll = false)
    {
        $response = $this->post(
            "RPC.common.Api.Contacts.set",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }
}
