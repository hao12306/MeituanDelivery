<?php

namespace MeituanDelivery\req;
/**
 * 发起餐损申请
 */
class MeituanCompensationApplyReq
{
    public $mt_peisong_id;
    public $phone;
    public $apply_reason_code;
    public $apply_reason_desc;
    public $meal_loss_picture_url;
    public $compensation_amount;
    public $order_picture_url;

    /**
     * @param mixed $mt_peisong_id
     */
    public function setMtPeisongId($mt_peisong_id): void
    {
        $this->mt_peisong_id = $mt_peisong_id;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $meal_loss_picture_url
     */
    public function setMealLossPictureUrl($meal_loss_picture_url): void
    {
        $this->meal_loss_picture_url = $meal_loss_picture_url;
    }

    /**
     * @param mixed $apply_reason_code
     */
    public function setApplyReasonCode($apply_reason_code): void
    {
        $this->apply_reason_code = $apply_reason_code;
    }

    /**
     * @param mixed $apply_reason_desc
     */
    public function setApplyReasonDesc($apply_reason_desc): void
    {
        $this->apply_reason_desc = $apply_reason_desc;
    }

    /**
     * @param mixed $compensation_amount
     */
    public function setCompensationAmount($compensation_amount): void
    {
        $this->compensation_amount = $compensation_amount;
    }

    /**
     * @param mixed $order_picture_url
     */
    public function setOrderPictureUrl($order_picture_url): void
    {
        $this->order_picture_url = $order_picture_url;
    }
}