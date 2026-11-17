<?php

namespace JeffersonGoncalves\CcpaRetention\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JeffersonGoncalves\CcpaRetention\CcpaRetention
 */
class CcpaRetention extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-ccpa-retention';
    }
}
