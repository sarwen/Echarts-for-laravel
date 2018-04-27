<?php
namespace Sarwen\Echarts;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Echarts
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
     public static function test_rtn($msg = ''){
        //$config_arr = $this->config->get('echarts.options');
        return $msg.' <strong>from your custom develop package!</strong>>';
    }
}