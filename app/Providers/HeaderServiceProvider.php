<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Header;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share header data globally
        View::composer('*', function ($view) {
            $header_data = Header::all(); // Or any filtered logic
            $view->with('header_data', $header_data);
        });
    }
}
