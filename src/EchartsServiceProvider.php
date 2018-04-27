<?php

namespace Sarwen\Echarts;

use Illuminate\Support\ServiceProvider;

class EchartsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'Echarts'); // 视图目录指定
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/echarts'),  // 发布视图目录到resources 下
            __DIR__.'/config/echarts.php' => config_path('echarts.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('echarts', function ($app) {
            return new Echarts($app['session'], $app['config']);
        });
    }
    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['echarts'];
    }
}
