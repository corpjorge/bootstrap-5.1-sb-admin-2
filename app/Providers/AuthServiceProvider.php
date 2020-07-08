<?php

namespace App\Providers;

use App\Tag;
use App\Article;
use App\Role;
use App\User;
use App\Category;
use App\Policies\TagPolicy;
use App\Policies\ArticlePolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\CategoryPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Category::class => CategoryPolicy::class,
        Article::class => ArticlePolicy::class,
        Role::class => RolePolicy::class,
        Tag::class => TagPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-articles', 'App\Policies\UserPolicy@managearticles');

        Gate::define('manage-users', 'App\Policies\UserPolicy@manageUsers');
    }
}
