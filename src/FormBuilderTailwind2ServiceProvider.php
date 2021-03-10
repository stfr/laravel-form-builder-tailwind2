<?php

namespace Stfr\LaravelFormBuilderTailwind2;

use Illuminate\Support\ServiceProvider;

class FormBuilderTailwind2ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Tailwind services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-form-builder.php' => config_path('laravel-form-builder.php'),
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-form-builder'),
        ], 'laravel-form-builder-tailwind2');

        $this->publishes([
            __DIR__ . '/../config/laravel-form-builder-horizontal.php' => config_path('laravel-form-builder.php'),
            __DIR__ . '/../resources/views-horizontal' => resource_path('views/vendor/laravel-form-builder'),
        ], 'laravel-form-builder-tailwind2-horizontal');
    }
}
