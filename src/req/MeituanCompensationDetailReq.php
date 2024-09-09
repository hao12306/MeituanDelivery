<?php

namespace MeituanDelivery\req;
/**
 * 查询餐损审核记录
 */
class MeituanCompensationDetailReq
{
    public $mt_peisong_id;

    /**
     * @param mixed $mt_peisong_id
     */
    public function setMtPeisongId($mt_peisong_id): void
    {
        $this->mt_peisong_id = $mt_peisong_id;
    }
}