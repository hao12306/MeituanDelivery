<?php

namespace MeituanDelivery\reqs;
/**
 * 图片上传接口
 */
class MeituanFileImageUploadReq
{
    public $image_name;
    public $image_data;

    /**
     * @param mixed $image_name
     */
    public function setImageName($image_name): void
    {
        $this->image_name = $image_name;
    }

    /**
     * @param mixed $image_data
     */
    public function setImageData($image_data): void
    {
        $this->image_data = $image_data;
    }
}