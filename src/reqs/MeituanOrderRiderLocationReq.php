<?php

namespace MeituanDelivery\reqs;
/**
 * 获取骑手位置
 */
class MeituanOrderRiderLocationReq
{
    public $delivery_id;
    public $mt_peisong_id;

    /**
     * @param mixed $delivery_id
     */
    public function setDeliveryId($delivery_id): void
    {
        $this->delivery_id = $delivery_id;
    }

    /**
     * @param mixed $mt_peisong_id
     */
    public function setMtPeisongId($mt_peisong_id): void
    {
        $this->mt_peisong_id = $mt_peisong_id;
    }
}