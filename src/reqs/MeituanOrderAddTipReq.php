<?php

namespace MeituanDelivery\reqs;
/**
 * 为骑手增加小费
 */
class MeituanOrderAddTipReq
{
    public $mt_peisong_id;
    public $delivery_id;
    public $tip_amount;
    public $serial_number;

    /**
     * @param mixed $mt_peisong_id
     */
    public function setMtPeisongId($mt_peisong_id): void
    {
        $this->mt_peisong_id = $mt_peisong_id;
    }

    /**
     * @param mixed $delivery_id
     */
    public function setDeliveryId($delivery_id): void
    {
        $this->delivery_id = $delivery_id;
    }

    /**
     * @param mixed $tip_amount
     */
    public function setTipAmount($tip_amount): void
    {
        $this->tip_amount = $tip_amount;
    }

    /**
     * @param mixed $serial_number
     */
    public function setSerialNumber($serial_number): void
    {
        $this->serial_number = $serial_number;
    }
}