<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin', fn (User $user) => $user->level->name === 'Admin');
        Gate::define('dokter', function (User $user) {
            return $user->level->name === 'Dokter' || $user->level->name === 'Admin';
        });
        Gate::define('farmasi', function (User $user) {
            return $user->level->name === 'Farmasi' || $user->level->name === 'Admin';
        });
        Gate::define('kasi', function (User $user) {
            return $user->level->name === 'Kasi' || $user->level->name === 'Admin';
        });
        Gate::define('pasien', function (User $user) {
            return $user->level->name === 'Pasien' || $user->level->name === 'Admin';
        });
        Gate::define('onlypasien', function (User $user) {
            return $user->level->name === 'Pasien';
        });
        Gate::define('dokter-pasien', function (User $user) {
            return $user->level->name === 'Pasien' || $user->level->name === 'Dokter' || $user->level->name === 'Admin';
        });
    }
}
