<?php

namespace MeituanDelivery\reqs;
/**
 * 取餐码信息下发
 */
class MeituanMealCodeSaveMealCodeByPkgIdReq
{
    public $mt_peisong_id;
    public $infos;

    /**
     * @param mixed $mt_peisong_id
     */
    public function setMtPeisongId($mt_peisong_id): void
    {
        $this->mt_peisong_id = $mt_peisong_id;
    }

    /**
     * @param mixed $infos
     */
    public function setInfos($infos): void
    {
        $this->infos = $infos;
    }
}