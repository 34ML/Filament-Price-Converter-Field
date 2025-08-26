<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Config;

class FilamentPriceConverterColumn extends TextColumn
{
    public static function make(string $name): static
    {
        $field = parent::make($name);

        // Get currency from tenant config
        $currencyCode   = Config::get('tenant.currency_code', 'USD');

        // Format number without showing built-in currency symbol
        $field->formatStateUsing(function ($state) {
            return number_format($state / 100, 2); // divide by 100 if storing cents
        })
            ->suffix(" {$currencyCode}");

        return $field;
    }
}
