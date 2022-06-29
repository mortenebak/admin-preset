<?php

namespace Indexed\LaravelAdminPreset\Commands;

use Illuminate\Console\Command;

class LaravelAdminPresetCommand extends Command
{
    public $signature = 'laravel-admin-preset';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
