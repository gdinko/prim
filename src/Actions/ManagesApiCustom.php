<?php

namespace Gdinko\Prim\Actions;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

trait ManagesApiCustom
{
    /**
     * customMethod
     *
     * @param  \Gdinko\Prim\Interfaces\PrimRequestInterface $request
     * @param  string $methodName
     * @param  string $verb
     * @param  bool $wantAll
     * @return array
     *
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Gdinko\Prim\Exceptions\PrimValidationException
     */
    public function customMethod(string $methodName, PrimRequestInterface $request, string $verb = 'post', $wantAll = false)
    {
        $response = $this->$verb(
            "{$methodName}",
            $request->getValidatedData(),
            $wantAll
        );

        return $wantAll ? $response : $response['result'] ?? [];
    }
}
