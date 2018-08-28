<?php

namespace Waimai\Meituan;

use Waimai\Service\Http;
use Waimai\Service\ServiceContainer;

class Client
{
    use Http;

    protected $config;
    private $appKey;
    private $secret;
    const URL = 'https://waimaiopen.meituan.com/api/v1/';

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->config = $app->getConfig()['meituan'];
        $this->appKey = $this->config['app_id'];
        $this->secret = $this->config['secret'];
    }

    /**
     * 合并函数
     * User: zhangzhen
     * Date: 2018/8/28 16:52
     * @param $params
     * @return array
     */
    public function getParams($params)
    {
        return array_merge($params, [
            'app_id' => $this->appKey,
            'timestamp' => time(),
        ]);
    }

    /**
     *  GET请求
     * User: zhangzhen
     * Date: 2018/8/28 16:53
     * @param $action
     * @param array $params
     * @return mixed
     */
    public function get($action, array $params = [])
    {
        $params = $this->getParams($params);
        $url = self::URL . $action;
        $sig = $this->generate_signature($url, $params);
        $params['sig'] = $sig;
        $url .= "?sig=".$sig."&".$this->concatParams($params);
        $response =  $this->request($url, 'GET', ['query' => $params]);
        return json_decode(strval($response->getBody()), true);
    }

    /**
     * POST请求
     * User: zhangzhen
     * Date: 2018/8/28 16:53
     * @param $action
     * @param array $params
     * @return mixed
     */
    public function post($action, array $params = [])
    {
        $params = $this->getParams($params);
        $url = self::URL . $action;
        $sig = $this->generate_signature($url, $params);
        $params['sig'] = $sig;
        $url .= "?sig=".$sig."&".$this->concatParams($params);
        $response =  $this->request($url, 'POST', ['form_params' => $params]);
        return json_decode(strval($response->getBody()), true);
    }

    /**
     * JSON请求
     * User: zhangzhen
     * Date: 2018/8/28 16:54
     * @param $action
     * @param array $params
     * @return mixed
     */
    public function json($action, array $params = [])
    {
        $params = $this->getParams($params);
        $url = self::URL . $action;
        $sig = $this->generate_signature($url, $params);
        $params['sig'] = $sig;
        $url .= "?sig=".$sig."&".$this->concatParams($params);
        $response =  $this->request($url, 'POST', ['json' => $params]);
        return json_decode(strval($response->getBody()), true);
    }

    /**
     * 获取Sing值
     * User: zhangzhen
     * Date: 2018/8/28 16:54
     * @param $action
     * @param $params
     * @return string
     */
    private function generate_signature($action, $params) {
        $params = $this->concatParams($params);
        $str = $action.'?'.$params.$this->secret;
        return md5($str);
    }

    /**
     * 组合参数
     * User: zhangzhen
     * Date: 2018/8/28 16:54
     * @param $params
     * @return string
     */
    private function concatParams($params) {
        ksort($params);
        $pairs = array();
        foreach($params as $key=>$val) {
            array_push($pairs, $key . '=' . $val);
        }
        return join('&', $pairs);
    }
}