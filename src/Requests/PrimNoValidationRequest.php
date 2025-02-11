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
     * @param  bool $wrap
     * @return void
     */
    public function __construct(array $data = [], $getAll = false, $wrap = true)
    {
        $this->validatedData = [
            'data' => $this->wrap(
                $data ?: new \stdClass(),
                $wrap
            ),
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

    /**
     * wrap
     *
     * @param  mixed $data
     * @param  bool $wrap
     * 
     * @return array
     */
    protected function wrap($data, $wrap): array
    {
        if ($wrap && is_array($data)) {
            return [$data];
        }

        if ($data instanceof \stdClass) {
            return [$data];
        }

        return $data;
    }
}
