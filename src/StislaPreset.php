<?php

namespace PotetoDev\LaravelUiStisla;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;
use Laravel\Ui\UiCommand;

class StislaPreset extends Preset
{
    const RESOURCE_PATH = __DIR__.'/../resources/';
    const STISLA_PATH = __DIR__.'/../stisla/';

    /**
     * Install the preset.
     *
     * @param UiCommand $command
     * @return void
     */
    public static function install(UiCommand $command)
    {
        static::updatePackages();
        $command->info('Updating Assets');
        static::updateAssets();

        $command->info('Updating Resource JS');
        static::updateScripts();
        $command->info('Updating Resource SASS');
        static::updateStyles();
        $command->info('Updating Resource Layouts');
        static::updateLayoutViews();
        $command->info('Updating Webpack Mix');
        static::updateMix();

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
            'popper.js' => '^1.14',
            'moment' => '^2.24',
            'bootstrap' => '^4.3.1',
            'jquery' => '^3.4',
            'jquery.nicescroll' => '^3.7'
        ] + $packages;
    }

    /**
     * Update the assets.
     *
     * @return void
     */
    protected static function updateAssets()
    {
        static::copyDirectory(
            __DIR__.'/../assets',
            public_path('assets')
        );
    }

    /**
     * Update the JS
     *
     * @return void
     */
    protected static function updateScripts()
    {
        static::copyDirectory(static::STISLA_PATH.'assets/js', resource_path('js/stisla'));
        static::copyDirectory(static::RESOURCE_PATH.'js', resource_path('js'));

        /**
         * Deleting unecessary
         */
        (new Filesystem)->deleteDirectory(resource_path('js/stisla/page'));
    }

    /**
     * Update the SCSS
     *
     * @return void
     */
    protected static function updateStyles()
    {
        (new Filesystem)->deleteDirectory(resource_path('sass'));

        static::copyDirectory(static::STISLA_PATH.'sources/scss', resource_path('sass'));
        static::copyDirectory(static::RESOURCE_PATH.'sass', resource_path('sass'));

        (new Filesystem)->delete(resource_path('sass/style.scss'));
    }

    /**
     * Update the default layout
     *
     * @return void
     */
    protected static function updateLayoutViews()
    {
        static::copyDirectory(static::RESOURCE_PATH.'views/layouts', resource_path('views/layouts'));
        static::copyDirectory(static::RESOURCE_PATH.'views/partials', resource_path('views/partials'));
        static::copyDirectory(static::RESOURCE_PATH.'views/app', resource_path('views/app'));
    }

    /**
     * Update the webpack.mix.js
     *
     * @return void
     */
    protected static function updateMix()
    {
        copy(
            __DIR__.'/../stubs/webpack.mix.js',
            base_path('webpack.mix.js')
        );
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
