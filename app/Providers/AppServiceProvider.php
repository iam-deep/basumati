<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Moving settings to boot will not pass the settings in our FormTool package
        $settings = null;

        // UNCOMMENT THE BELOW LINE
        // $settings = $this->getSettings();

        $this->app->singleton('settings', function () use ($settings) {
            return $settings;
        });

        view()->share('settings', $settings);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }

    private function getSettings()
    {
        $result = DB::table('settings')->get();

        $settings = new \stdClass();
        foreach ($result as $row) {
            $settings->{$row->key} = $row->value;
        }

        return $settings;
    }
}
