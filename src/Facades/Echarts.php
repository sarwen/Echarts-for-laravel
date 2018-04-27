<?php
namespace Sarwen\Echarts\Facades;
use Illuminate\Support\Facades\Facade;
class Echarts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'echarts';
    }
}