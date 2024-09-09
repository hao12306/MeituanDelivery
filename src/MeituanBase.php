<?php

namespace MeituanDelivery;

use MeituanDelivery\const\MeituanConst;
use MeituanDelivery\facade\HttpFacade;
use MeituanDelivery\util\ShaUtil;

/**
 * 基类
 */
class MeituanBase
{
    use MeituanConst;

    private $appkey;
    private $secret;
    private $timestamp;
    private $version;

    public function __construct(string $appkey, string $secret)
    {
        $this->appkey = $appkey;
        $this->secret = $secret;
    }

    //实体对象转数组
    private function obj2arr($obj)
    {
        return json_decode(json_encode($obj, JSON_UNESCAPED_UNICODE), true);
    }

    /**
     * 签名文档: https://peisong.meituan.com/tscc/docNew#%E6%95%B0%E6%8D%AE%E7%AD%BE%E5%90%8D
     */
    public function sign(array $params)
    {
        $str = "";
        ksort($params);//key升序排序
        foreach ($params as $k => $v) {
            //剔除值为空的参数
            if ($v == null || $v == "") {
                unset($params[$k]);
                continue;
            }
            $str .= $k . $v;
        }
        $sign = ShaUtil::sha1($this->secret, $str);
        return $sign;
    }

    public function request($url, $params, $method = "POST")
    {
        $params = $this->obj2arr($params);
        //公共参数
        $params['appkey'] = $this->appkey;
        $params['timestamp'] = time();
        $params['version'] = $this->VERSION;
        $params['sign'] = $this->sign($params);
        $url = $this->BASE_URL . $url;
        $res = HttpFacade::post($url, $params);
        return $res;
    }
}