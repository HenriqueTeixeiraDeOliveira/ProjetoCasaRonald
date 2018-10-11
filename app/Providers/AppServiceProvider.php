<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Relation::morphMap([
            'lesson' => 'App\Lesson',
            'advertisement' => 'App\Advertisement',
            'professor' => 'App\Professor',
            'student' => 'App\Student',
            'manager' => 'App\Manager'
        ]);

        \Carbon\Carbon::setLocale('pt_BR');  //To use Carbon in Portuguese
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
