<?php

namespace App\Providers;

use App\Models\SettingsModule\AppInfo;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Paginator::useBootstrapFive();

        $app_info = AppInfo::select('id', 'title', 'description', 'logo', 'favicon', 'url')->where('is_active', true)->where('is_delete', false)->first();

        View::share(['app_info' => $app_info]);

    }
}
