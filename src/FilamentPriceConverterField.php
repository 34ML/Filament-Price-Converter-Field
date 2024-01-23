<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Forms\Components\TextInput;
use Filament\Support\RawJs;

class FilamentPriceConverterField extends TextInput
{
    public static function make(string $name): static
    {
        $field = parent::make($name);

//        $field->numeric()->mask(RawJs::make('$money($input)'))->minValue(0)->stripCharacters(',');
        $field->numeric()->minValue(0);

        $field->afterStateHydrated(fn(TextInput $component, $state) => $component->state($state / 100));

        $field->dehydrateStateUsing(fn ($state) => $state * 100);

        return $field;
    }
}
