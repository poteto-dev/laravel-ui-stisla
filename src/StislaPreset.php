<?php

namespace PotetoDev\LaravelUiStisla;

use Laravel\Ui\Presets\Preset;
use Laravel\Ui\UiCommand;

class StislaPreset extends Preset
{
    /**
     * Install the preset
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        // TODO: Add some preset
        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            // TODO: Add package to update
        ] + $packages;
    }
}
