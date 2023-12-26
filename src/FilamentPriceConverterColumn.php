<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Tables\Columns\TextColumn;

class FilamentPriceConverterColumn extends TextColumn
{
    public static function make(string $name): static
    {
        $field = parent::make($name);
        $field->money(config('filament-price-converter-field.currency','USD'),100);
        return $field;
    }
}
