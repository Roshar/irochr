<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class RFaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Helpers/RFa.php';
    }

}
