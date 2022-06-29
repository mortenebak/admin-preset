<?php

namespace Indexed\LaravelAdminPreset\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Indexed\LaravelAdminPreset\LaravelAdminPreset
 */
class LaravelAdminPreset extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-admin-preset';
    }
}
