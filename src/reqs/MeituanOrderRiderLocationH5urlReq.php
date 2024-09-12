<?php

namespace MeituanDelivery\reqs;
/**
 * 获取骑手位置H5页面
 */
class MeituanOrderRiderLocationH5urlReq
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