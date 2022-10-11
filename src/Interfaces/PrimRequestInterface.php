<?php

namespace Gdinko\Prim\Interfaces;

interface PrimRequestInterface
{
    /**
     * validationRules
     *
     * @return array
     */
    public function getValidationRules(): array;

    /**
     * getValidatedData
     *
     * @return array
     */
    public function getValidatedData(): array;
}
