<?php

namespace App\Providers;

use App\Permission;
use App\User;
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
        //
        \Blade::if('has_role', function ($role) {
            $roles = explode(',', $role);
            $user = auth()->user();
            foreach ($roles as $role) {
                $hasRole = $user->hasRole($role);
                if ($hasRole) {
                    return $hasRole;
                }
            }

            return null;
        });

        \Blade::if('has_permission', function ($permission) {
            $permissions = explode(',', $permission);
            $user = auth()->user();
            foreach ($permissions as $permission) {
                $permission = Permission::where('name', $permission)->first();
                $hasPermission = $user->hasPermission($permission);
                if ($hasPermission) {
                    return $hasPermission;
                }
            }
            return null;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
