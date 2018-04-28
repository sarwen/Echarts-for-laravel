# Echarts-for-laravel
laravel的echarts扩展包
# 引入方法：
require部分加入下面一行：
"sarwen/echarts": "dev-master"
# 然后添加服务： 修改 config/app.php 添加
Sarwen\Echarts\EchartsServiceProvider::class
# 和别名的配置：
‘Echarts’ => Sarwen\Echarts\Facades\Echarts::class
# 执行 composer dump-autoload
# 发布资源文件： php artisan vendor:publish --provider=”Sarwen\Echarts\EchartsServiceProvider” 
