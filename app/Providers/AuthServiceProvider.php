<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isAdmin', function($user){
            return $user->usertype == "Administrator";
        });

        $gate->define('isPostMaster', function($user){
            return $user->usertype == "Post Master";
        });

        $gate->define('isOfficer', function($user){
            return $user->usertype == "Officer";
        });

        $gate->define('isPostMan', function($user){
            return $user->usertype == "Post Man";
        });

        $gate->define('isCustomer', function($user){
            return $user->usertype == "Customer";
        });
        //
    }
}
