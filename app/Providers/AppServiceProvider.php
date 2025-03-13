<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\View;
>>>>>>> e805ba4 (update admin)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
<<<<<<< HEAD
    public function boot(): void
    {
        //
=======


    public function boot()
    {
        View::composer('components.navbar', function ($view) {
            $view->with('menuItems', [
                ['path' => '/', 'icon' => '/images/home.svg', 'title' => 'Home'],
                ['path' => '/profil-desa', 'icon' => '/images/profil.svg', 'title' => 'Profil Desa'],
                ['path' => '/desa-dalam-angka', 'icon' => '/images/angka.svg', 'title' => 'Desa dalam Angka'],
                ['path' => '/desa-dalam-gambar', 'icon' => '/images/gambar.svg', 'title' => 'Desa dalam Gambar'],
                ['path' => '/desa-dalam-peta', 'icon' => '/images/peta.svg', 'title' => 'Desa dalam Peta'],
                ['path' => '/desa-dalam-grafik', 'icon' => '/images/grafik.svg', 'title' => 'Desa dalam Grafik'],
                ['path' => '/buku-monografi', 'icon' => '/images/buku.svg', 'title' => 'Buku Monografi'],
                ['path' => '/metadata', 'icon' => '/images/metadata.svg', 'title' => 'Metadata'],
                ['path' => '/instrumen', 'icon' => '/images/instrumen.svg', 'title' => 'Instrumen'],
            ]);
        });
>>>>>>> e805ba4 (update admin)
    }
}
