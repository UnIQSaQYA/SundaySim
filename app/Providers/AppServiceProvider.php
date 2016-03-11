<?php

namespace App\Providers;

use SundaySim\View\ThemeViewFinder;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('theme.finder', function($app){
            $finder = new ThemeViewFinder($app['files'], $app['config']['view.paths']);

            $config = $app['config']['cms.theme'];

            $finder->setBasePath($app['path.public'].'/'.$config['folder']);

            $finder->setActiveTheme($config['active']);

            return $finder;
        });
    }
}
