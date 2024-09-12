<?php

namespace MeituanDelivery\reqs;
/**
 * 查询门店信息
 */
class MeituanShopQueryReq
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