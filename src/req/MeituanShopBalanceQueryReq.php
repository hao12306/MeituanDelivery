<?php

namespace MeituanDelivery\req;
/**
 * 查询门店账户余额
 */
class MeituanShopBalanceQueryReq
{
    public $shop_id;

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id): void
    {
        $this->shop_id = $shop_id;
    }
}