<?php

namespace MeituanDelivery\util;
/**
 * 签名类
 */
class ShaUtil
{
    /**
     * SHA1 签名
     */
    public static function sha1($secret, $str)
    {
        return sha1($secret . $str);
    }

    /**
     * HMAC-SHA1 签名
     */
    public static function hash_hmac($secret, $str)
    {
        return hash_hmac('sha1', $str, $secret);
    }
}