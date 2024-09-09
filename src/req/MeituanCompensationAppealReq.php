<?php

namespace MeituanDelivery\req;
/**
 * 发起餐损申诉
 */
class MeituanCompensationAppealReq
{
    public $mt_peisong_id;
    public $appeal_reason_code;
    public $appeal_reason_desc;
    public $appeal_evidence_pictures_url;

    /**
     * @param mixed $mt_peisong_id
     */
    public function setMtPeisongId($mt_peisong_id): void
    {
        $this->mt_peisong_id = $mt_peisong_id;
    }

    /**
     * @param mixed $appeal_reason_code
     */
    public function setAppealReasonCode($appeal_reason_code): void
    {
        $this->appeal_reason_code = $appeal_reason_code;
    }

    /**
     * @param mixed $appeal_reason_desc
     */
    public function setAppealReasonDesc($appeal_reason_desc): void
    {
        $this->appeal_reason_desc = $appeal_reason_desc;
    }

    /**
     * @param mixed $appeal_evidence_pictures_url
     */
    public function setAppealEvidencePicturesUrl($appeal_evidence_pictures_url): void
    {
        $this->appeal_evidence_pictures_url = $appeal_evidence_pictures_url;
    }
}