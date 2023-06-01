<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;

class FilamentPriceConverterColumn extends TextColumn
{

    protected function setUp(): void
    {
        parent::setUp();

        $this->formatStateUsing(fn ($state) =>
            is_numeric($state) ? $state / 100 : ''
        );
    }
}
