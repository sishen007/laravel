<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //视图间共享数据
        view()->share('sitename','Laravel学院');

        //视图Composer
//        view()->composer('welcome',function($view){
//            $view->with('user',array('name'=>'test','avatar'=>'/path/to/test.jpg'));
//        });
        // 监听查询事件
//        DB::listen(function ($query){
//            var_dump($query->sql);
//        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
