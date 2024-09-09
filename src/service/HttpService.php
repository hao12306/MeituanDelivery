<?php
declare(strict_types=1);

namespace MeituanDelivery\service;

use think\Exception;

/**
 * 服务类
 */
class HttpService
{
    private $headers = [];
    //控制返回的字符串转对象
    private $toJsonObjectFlag = true;

    public function setHeaders($headers = [])
    {
        $this->headers = $headers;
        return $this;
    }

    public function setToJsonObjectFlag(bool $flag)
    {
        $this->toJsonObjectFlag = $flag;
        return $this;
    }

    public function get($url, $params = [])
    {
        //数组转URI
        if (!empty($params)) {
            $url = $url . "?" . http_build_query($params);
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);//将结果作为字符串返回而不是输出
        curl_setopt($curl, CURLOPT_HEADER, false);
        if (1 == strpos("$" . $url, "https://")) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        $result = curl_exec($curl);
        //检查是否有错误发生
        if (curl_errno($curl)) {
            throw new Exception('GET异常:' . curl_errno($curl), "0001");
        }
        curl_close($curl);
        if ($this->toJsonObjectFlag) {
            return json_decode($result, true);
        }
        return $result;
    }

    public function post($url, $params = [])
    {
        //数组转URI
        if (!empty($params)) {
            $params = http_build_query($params);
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);//设置HTTP头部
        curl_setopt($curl, CURLOPT_POST, true);//设置为POST请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);//设置POST数据
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);//将结果作为字符串返回而不是输出
        $result = curl_exec($curl);
        //检查是否有错误发生
        if (curl_errno($curl)) {
            throw new Exception('POST异常:' . curl_errno($curl), "0001");
        }
        curl_close($curl);
        if ($this->toJsonObjectFlag) {
            return json_decode($result, true);
        }
        return $result;
    }
}