<?php

namespace Gdinko\Prim\Requests;

use Gdinko\Prim\Interfaces\PrimRequestInterface;

class PrimNoValidationRequest implements PrimRequestInterface
{
    /**
     * validatedData
     *
     * @var array
     */
    protected $validatedData = [];

    /**
     * __construct
     *
     * @param  array $data
     * @param  bool $getAll
     * @return void
     */
    public function __construct(array $data = [], $getAll = false)
    {
        $this->validatedData = [
            'data' => [
                $data ?: new \stdClass(),
            ],
            'get_all' => $getAll,
        ];
    }

    /**
     * getValidationRules
     *
     * @return array
     */
    public function getValidationRules(): array
    {
        return [];
    }

    /**
     * getValidatedData
     *
     * @return array
     */
    public function getValidatedData(): array
    {
        return $this->validatedData;
    }
}
