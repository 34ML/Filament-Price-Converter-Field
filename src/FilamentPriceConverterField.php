<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Forms\Components\TextInput;
use Filament\Support\RawJs;

class FilamentPriceConverterField extends TextInput
{
    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->numeric()
            ->minValue(0)
            ->afterStateHydrated(
                fn (TextInput $component, $state) => $component->state($state / 100)
            )
            ->dehydrateStateUsing(
                fn ($state) => $state * 100
            );
    }
}
