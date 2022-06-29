<?php

namespace Indexed\LaravelAdminPreset;

use Illuminate\Pagination\Paginator;
use Indexed\LaravelAdminPreset\Commands\LaravelAdminPresetCommand;
use Laravel\Ui\UiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAdminPresetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-admin-preset')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-admin-preset_table')
            ->hasCommand(LaravelAdminPresetCommand::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        UiCommand::macro('admin-preset', function ($command) {
            LaravelAdminPreset::install();

            $command->info('TALL preset scaffolding installed successfully.');

            $command->comment('Please run "npm install && npm run dev" to compile your new assets.');
        });

        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}
