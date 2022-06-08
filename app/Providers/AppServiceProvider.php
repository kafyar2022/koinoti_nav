<?php

namespace App\Providers;

use App\Helpers\Helper;
use App\Models\Social;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
    Schema::defaultStringLength(191);
    Paginator::useBootstrap();

    view()->composer('*', function ($view) {
      $app['texts'] = Helper::getTexts('all');

      $app['socials'] = Social::select(
        'id',
        request('locale') . '_title as title',
        'icon',
        'url',
      )->get();

      return $view->with([
        'app' => $app,
      ]);
    });
  }
}
