<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Profile' => 'App\Policies\ProfilePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // above is a method to protect profile via Gates.
        $this->registerPolicies();
        Gate::define("isAllowed", function($user,$id){
            $user_id = $user->profile->user_id;
            if($user_id == $id)
                return Response::allow();
            return Response::deny('You must be a super administrator.');

        });
    }
}
