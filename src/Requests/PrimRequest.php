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
     * @param  bool $wrap
     * @return void
     */
    public function __construct(array $data = [], $getAll = false, array $validationRules = [], $wrap = true)
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
            'data' => $this->wrap(
                $validator->validated() ?: ($data ?: new \stdClass()),
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
