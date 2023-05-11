<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Lotauction;
use App\Models\Rate;
use App\Policies\LotPolicy;
use App\Policies\RatePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Lotauction::class => LotPolicy::class,
        Rate::class => RatePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
