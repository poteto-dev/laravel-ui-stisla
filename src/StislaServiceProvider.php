<?php

namespace PotetoDev\LaravelUiStisla;

use Laravel\Ui\UiCommand;
use Illuminate\Support\ServiceProvider;

class StislaServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('stisla', function (UiCommand $command) {
            $command->info('Get stisla from stisla/stisla.');
            exec('git -C vendor/poteto-dev/laravel-ui-stisla submodule init');
            exec('git -C vendor/poteto-dev/laravel-ui-stisla submodule update');

            StislaPreset::install($command);

            $command->info('Installing package.');
            exec('npm install && npm run production');
            $command->info('Package installed successfull.');

            $command->info('Stisla UI scaffolding installed successfully.');
        });
    }
}
