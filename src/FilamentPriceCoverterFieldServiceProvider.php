<?php

namespace _34ML\FilamentPriceCoverterField;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use _34ML\FilamentPriceCoverterField\Commands\FilamentPriceCoverterFieldCommand;

class FilamentPriceCoverterFieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-price-coverter-field')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-price-coverter-field_table')
            ->hasCommand(FilamentPriceCoverterFieldCommand::class);
    }
}
