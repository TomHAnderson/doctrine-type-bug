<?php

namespace App\Providers;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        DB::registerDoctrineType(TimestampType::class, 'timestamp', 'timestamp');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
