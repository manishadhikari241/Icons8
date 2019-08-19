<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ForumCategoryRepository;
use App\Repositories\Eloquent\EloquentForumCategoryRepository;
use App\Repositories\Contracts\StyleRepository;
use App\Repositories\Eloquent\EloquentStyleRepository;

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
        Schema::defaultStringLength('191');
        $this->app->singleton(StyleRepository::class,EloquentStyleRepository::class);
        $this->app->singleton(ForumCategoryRepository::class,EloquentForumCategoryRepository::class);

    }
}
