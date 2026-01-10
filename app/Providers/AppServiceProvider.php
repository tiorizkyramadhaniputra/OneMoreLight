<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Baris ini jangan sampai ketinggalan!

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Memastikan asset (gambar/css) menggunakan HTTPS di Vercel
        if (config('app.env') === 'production' || env('VERCEL')) {
            URL::forceScheme('https');
        }
    }
}