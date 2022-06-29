<?php

namespace Indexed\LaravelAdminPreset\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Indexed\LaravelAdminPreset\LaravelAdminPresetServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Indexed\\LaravelAdminPreset\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAdminPresetServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-admin-preset_table.php.stub';
        $migration->up();
        */
    }
}
