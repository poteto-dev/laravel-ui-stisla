<?php

namespace PotetoDev\LaravelUiStisla;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class StislaPreset extends Preset
{
    const RESOURCE_PATH = __DIR__.'/../resources/';

    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();

        static::updateScripts();
        static::updateStyles();
        static::updateLayoutViews();

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

    /**
     * Update the JS
     *
     * @return void
     */
    protected static function updateScripts()
    {
        (new Filesystem)->deleteDirectory(resource_path('js'));

        static::copyDirectory(static::RESOURCE_PATH.'js', resource_path('js'));
    }

    /**
     * Update the SCSS
     *
     * @return void
     */
    protected static function updateStyles()
    {
        (new Filesystem)->deleteDirectory(resource_path('sass'));

        static::copyDirectory(static::RESOURCE_PATH.'sass', resource_path('sass'));
    }

    /**
     * Update the default layout
     */
    protected static function updateLayoutViews()
    {
        static::copyDirectory(static::RESOURCE_PATH.'views/layouts', resource_path('views/layouts'));
        static::copyDirectory(static::RESOURCE_PATH.'views/partials', resource_path('views/partials'));
        static::copyDirectory(static::RESOURCE_PATH.'views/app', resource_path('views/app'));
    }

    /**
     * Copy a directory
     *
     * @param $source
     * @param $destination
     * @return void
     */
    private static function copyDirectory($source, $destination)
    {
        (new Filesystem)->copyDirectory($source, $destination);
    }
}
