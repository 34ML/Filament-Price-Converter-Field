<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class FilamentPriceConverterColumn extends TextColumn
{

    protected function setUp(): void
    {
        parent::setUp();

        $this->formatStateUsing(fn (string $state): string => $state / 100);
    }
}
