<?php

namespace _34ML\FilamentPriceConverterField\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \_34ML\FilamentPriceConverterField\FilamentPriceConverterField
 */
class FilamentPriceConverterField extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \_34ML\FilamentPriceConverterField\FilamentPriceConverterField::class;
    }
}
