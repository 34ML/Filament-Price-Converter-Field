<?php

namespace _34ML\FilamentPriceConverterField;

use Filament\Forms\Components\TextInput;

class FilamentPriceConverterField extends TextInput
{
    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->numeric()
            ->minValue(0)
            ->afterStateHydrated(function (TextInput $component, mixed $state): void {
                if ($state === null || $state === '') {
                    return;
                }

                $component->state($state / 100);
            })
            ->dehydrateStateUsing(function (mixed $state): ?int {
                if ($state === null || $state === '') {
                    return null;
                }

                return $state * 100;
            });
    }
}
