<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/**
* contentsサービスプロバイダクラス
* 
* @author kogure
* 
*/
class ContentsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('contents', 'App\Services\ContentsService');
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
