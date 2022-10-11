<?php

namespace Gdinko\Prim\Facades;

use Illuminate\Support\Facades\Facade;

class Prim extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'prim';
    }
}
