<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Forms\Components\TextInput;

class FilamentPriceConverterField extends TextInput
{

    protected function setUp(): void
    {
        parent::setUp();

        $this->numeric();

        $this->afterStateHydrated(fn(TextInput $component, $state) => $component->state($state / 100));

        $this->dehydrateStateUsing(fn ($state) => $state * 100);
    }
}
