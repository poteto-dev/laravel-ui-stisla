<?php

namespace PotetoDev\LaravelUiStisla;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use PotetoDev\LaravelUiStisla\Console\StislaCommand;

class StislaServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                StislaCommand::class
            ]);
        }
    }

    public function provides()
    {
        return [
            StislaCommand::class
        ];
    }
}
