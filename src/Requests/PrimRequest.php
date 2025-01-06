<?php

namespace Gdinko\Prim\Requests;

use Gdinko\Prim\Exceptions\PrimValidationException;
use Gdinko\Prim\Interfaces\PrimRequestInterface;
use Illuminate\Support\Facades\Validator;

class PrimRequest implements PrimRequestInterface
{
    /**
     * validationRules
     *
     * @var array
     */
    protected $validationRules = [];

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
     * @param  array $validationRules
     * @return void
     */
    public function __construct(array $data = [], $getAll = false, array $validationRules = [])
    {
        $this->validationRules = $validationRules;

        $validator = Validator::make(
            $data,
            $this->getValidationRules()
        );

        if ($validator->fails()) {
            throw new PrimValidationException(
                __CLASS__,
                422,
                $validator->messages()->toArray()
            );
        }

        $this->validatedData = [
            'data' => [
                $validator->validated() ?: ($data ?: new \stdClass()),
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
        if (! empty($this->validationRules)) {
            return $this->validationRules;
        }

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
