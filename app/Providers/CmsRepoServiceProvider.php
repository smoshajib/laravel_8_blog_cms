<?php

namespace App\Providers;

use App\Cms\Eloquent\CategoryRepository;
use App\Cms\Eloquent\PostRepository;
use App\Cms\Interfaces\CategoryRepositoryInterface;
use App\Cms\Interfaces\PostRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class CmsRepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
