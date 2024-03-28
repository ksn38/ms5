<?php

namespace App\Providers;

use App\Policies\CompanyUserPolicy;
use Illuminate\Support\ServiceProvider;
use App\Models\Company;
use Illuminate\Support\Facades\Gate;

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
    public function boot(): void
    {
        Gate::policy(Company::class, CompanyUserPolicy::class);
    }
}
