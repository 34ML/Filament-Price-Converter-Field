<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Tables\Columns\TextColumn;

class FilamentPriceConverterColumn extends TextColumn
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->money(
            config('filament-price-converter-field.currency', 'USD'),
            100
        );
    }
}
