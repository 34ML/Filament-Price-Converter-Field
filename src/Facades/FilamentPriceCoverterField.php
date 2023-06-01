<?php

namespace _34ML\FilamentPriceCoverterField\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \_34ML\FilamentPriceCoverterField\FilamentPriceCoverterField
 */
class FilamentPriceCoverterField extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \_34ML\FilamentPriceCoverterField\FilamentPriceCoverterField::class;
    }
}
