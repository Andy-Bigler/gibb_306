<?php

namespace App\Providers;

use Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('delete-comment', function ($user, $comment) {
            return $user->id == $comment->user_id;
        });

        Gate::define('edit-comment', function ($user, $comment) {
            return $user->id == $comment->user_id;
        });

        Gate::define('delete-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });

        Gate::define('edit-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });
    }
}
