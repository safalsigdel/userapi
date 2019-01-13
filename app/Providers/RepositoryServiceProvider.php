<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = [
            'User'
        ];
        foreach ($repositories as $repository){
            $this->app->bind(
                "App\\Http\\Interfaces\\{$repository}RepositoryInterface",
                "App\\Http\\Repositories\\{$repository}Repository"
            );
        }
    }
}
