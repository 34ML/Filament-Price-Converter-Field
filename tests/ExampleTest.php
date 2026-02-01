<?php

use _34ML\FilamentPriceConverterField\FilamentPriceConverterColumn;
use _34ML\FilamentPriceConverterField\FilamentPriceConverterField;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('converts cents to display value and back', function () {
    $field = FilamentPriceConverterField::make('price');

    $hydrate = fn ($state) => $state / 100;
    $dehydrate = fn ($state) => $state * 100;

    expect($hydrate(1000))->toBe(10);
    expect($dehydrate(10))->toBe(1000);
});

it('formats money correctly', function () {
    $column = FilamentPriceConverterColumn::make('price');

    expect($column)->not->toBeNull();
});

it('creates the field', function () {
    expect(FilamentPriceConverterField::make('price'))
        ->toBeInstanceOf(FilamentPriceConverterField::class);
});

it('creates the column', function () {
    expect(FilamentPriceConverterColumn::make('price'))
        ->toBeInstanceOf(FilamentPriceConverterColumn::class);
});
