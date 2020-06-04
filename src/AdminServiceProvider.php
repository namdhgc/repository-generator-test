<?php

namespace Namdhgc\Admin\RepositoryGenerator;

use Illuminate\Support\ServiceProvider;
use Namdhgc\Admin\Commands\RepositoryGenerator;

class AdminServiceProvider extends ServiceProvider
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
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/commands' => base_path('app/Console/Commands/'),
            __DIR__.'/stubs' => base_path('resources/stubs/'),
        ], "repositiry-generator");

        // if ($this->app->runningInConsole()) {
        //     $this->commands([
        //         RepositoryGenerator::class,
        //      ]);
        // }
    }
}