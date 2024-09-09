<?php

namespace MeituanDelivery\req;
/**
 * 查询门店配送范围
 */
class MeituanShopAreaQueryReq
{
    public $shop_id;
    public $delivery_service_code;

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param mixed $delivery_service_code
     */
    public function setDeliveryServiceCode($delivery_service_code): void
    {
        $this->delivery_service_code = $delivery_service_code;
    }
}