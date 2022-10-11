<?php

namespace Gdinko\Prim\Exceptions;

use Exception;

class PrimException extends Exception
{
    protected $errors;

    /**
     * __construct
     *
     * @param  string $message
     * @param  int $code
     * @param  array $errors Prim Errors
     * @return void
     */
    public function __construct($message, $code = 0, $errors = null)
    {
        parent::__construct($message, $code);

        $this->errors = $errors;
    }

    /**
     * getErrors
     *
     * @return array
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }
}
