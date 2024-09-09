<?php

namespace MeituanDelivery\req;
/**
 * 评价骑手服务
 */
class MeituanOrderEvaluateReq
{
    public $delivery_id;
    public $mt_peisong_id;
    public $score;
    public $comment_content;

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
     * @param mixed $score
     */
    public function setScore($score): void
    {
        $this->score = $score;
    }

    /**
     * @param mixed $comment_content
     */
    public function setCommentContent($comment_content): void
    {
        $this->comment_content = $comment_content;
    }
}