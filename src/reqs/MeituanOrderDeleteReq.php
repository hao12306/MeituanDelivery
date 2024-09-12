<?php

namespace MeituanDelivery\reqs;
/**
 * 取消订单
 */
class MeituanOrderDeleteReq
{
    public $delivery_id;
    public $mt_peisong_id;
    public $cancel_reason_id;
    public $cancel_reason;

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

    /**
     * @param mixed $cancel_reason_id
     */
    public function setCancelReasonId($cancel_reason_id): void
    {
        $this->cancel_reason_id = $cancel_reason_id;
    }

    /**
     * @param mixed $cancel_reason
     */
    public function setCancelReason($cancel_reason): void
    {
        $this->cancel_reason = $cancel_reason;
    }
}