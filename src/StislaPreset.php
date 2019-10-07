<?php

namespace PotetoDev\LaravelUiStisla;

use Laravel\Ui\Presets\Preset;

class StislaPreset extends Preset
{
    /**
     * Install the preset.
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
            '@fortawesome/fontawesome-free' => '^5.10.2',
            'bootstrap' => '^4.3.1',
            'vue' => '^2.5.17',
            'vue-template-compiler' => '^2.6.10',
            'bootstrap-vue' => '^2.0.1',
        ] + $packages;
    }
}
