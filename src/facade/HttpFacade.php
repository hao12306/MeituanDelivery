<?php
declare (strict_types=1);

namespace MeituanDelivery\facade;

use think\Facade;

/**
 * HTTP门面(注释方法对ide友好)
 * @method static mixed setHeaders($headers = []) HEADER头设置
 * @method static mixed setToJsonObjectFlag($flag = false) 结果转json对象
 * @method static mixed get($url, $params = []) GET请求
 * @method static mixed post($url, $params = []) POST请求
 */
class HttpFacade extends Facade
{
    protected static function getFacadeClass()
    {
        return 'MeituanDelivery\service\HttpService';
    }
}
