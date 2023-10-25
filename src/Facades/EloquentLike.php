<?php

namespace Soap\EloquentLike\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\EloquentLike\EloquentLike
 */
class EloquentLike extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\EloquentLike\EloquentLike::class;
    }
}
