<?php

namespace App\Providers;

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
        view()->composer('layout.sidebar', function ($view)
        {
          $view->with('archives', \App\Post::archives() );
          $view->with('tags', \App\Tag::pluck('name')->sortByDesc('name'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton('App\Billing\Stripe', function(){
        return new \App\Billing\Stripe(config('services.stripe.secret'));
      });

    }
}
