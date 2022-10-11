<?php

namespace Gdinko\Prim\Exceptions;

use Exception;

class PrimValidationException extends Exception
{
    protected $errors = [];

    /**
     * __construct
     *
     * @param  string $message
     * @param  int $code
     * @param  array $errors Validation Errors
     * @return void
     */
    public function __construct($message, $code = 0, $errors = [])
    {
        parent::__construct($message, $code);

        $this->errors = $errors;
    }

    /**
     * getErrors
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
