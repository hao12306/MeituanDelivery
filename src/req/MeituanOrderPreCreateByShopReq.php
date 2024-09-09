<?php

namespace MeituanDelivery\req;
/**
 * 发单前预览
 */
class MeituanOrderPreCreateByShopReq
{
    public $order_id;
    public $delivery_id;
    public $outer_order_source_desc;
    public $outer_order_source_no;
    public $shop_id;
    public $delivery_service_code;
    public $receiver_name;
    public $receiver_address;
    public $receiver_phone;
    public $receiver_lng;
    public $receiver_lat;
    public $coordinate_type;
    public $goods_value;
    public $goods_height;
    public $goods_width;
    public $goods_length;
    public $goods_weight;
    public $goods_detail;
    public $goods_pickup_info;
    public $goods_delivery_info;
    public $expected_pickup_time;
    public $expected_delivery_time;
    public $order_type;
    public $note;
    public $rider_pick_method;
    public $tip_amount;
    public $goods_code_switch;
    public $prohibit_recommend_coupons;

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @param mixed $delivery_id
     */
    public function setDeliveryId($delivery_id): void
    {
        $this->delivery_id = $delivery_id;
    }

    /**
     * @param mixed $outer_order_source_desc
     */
    public function setOuterOrderSourceDesc($outer_order_source_desc): void
    {
        $this->outer_order_source_desc = $outer_order_source_desc;
    }

    /**
     * @param mixed $outer_order_source_no
     */
    public function setOuterOrderSourceNo($outer_order_source_no): void
    {
        $this->outer_order_source_no = $outer_order_source_no;
    }

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param mixed $delivery_service_code
     */
    public function setDeliveryServiceCode($delivery_service_code): void
    {
        $this->delivery_service_code = $delivery_service_code;
    }

    /**
     * @param mixed $receiver_name
     */
    public function setReceiverName($receiver_name): void
    {
        $this->receiver_name = $receiver_name;
    }

    /**
     * @param mixed $receiver_address
     */
    public function setReceiverAddress($receiver_address): void
    {
        $this->receiver_address = $receiver_address;
    }

    /**
     * @param mixed $receiver_phone
     */
    public function setReceiverPhone($receiver_phone): void
    {
        $this->receiver_phone = $receiver_phone;
    }

    /**
     * @param mixed $receiver_lng
     */
    public function setReceiverLng($receiver_lng): void
    {
        $this->receiver_lng = $receiver_lng;
    }

    /**
     * @param mixed $receiver_lat
     */
    public function setReceiverLat($receiver_lat): void
    {
        $this->receiver_lat = $receiver_lat;
    }

    /**
     * @param mixed $coordinate_type
     */
    public function setCoordinateType($coordinate_type): void
    {
        $this->coordinate_type = $coordinate_type;
    }

    /**
     * @param mixed $goods_value
     */
    public function setGoodsValue($goods_value): void
    {
        $this->goods_value = $goods_value;
    }

    /**
     * @param mixed $goods_height
     */
    public function setGoodsHeight($goods_height): void
    {
        $this->goods_height = $goods_height;
    }

    /**
     * @param mixed $goods_width
     */
    public function setGoodsWidth($goods_width): void
    {
        $this->goods_width = $goods_width;
    }

    /**
     * @param mixed $goods_length
     */
    public function setGoodsLength($goods_length): void
    {
        $this->goods_length = $goods_length;
    }

    /**
     * @param mixed $goods_weight
     */
    public function setGoodsWeight($goods_weight): void
    {
        $this->goods_weight = $goods_weight;
    }

    /**
     * @param mixed $goods_detail
     */
    public function setGoodsDetail($goods_detail): void
    {
        $this->goods_detail = $goods_detail;
    }

    /**
     * @param mixed $goods_pickup_info
     */
    public function setGoodsPickupInfo($goods_pickup_info): void
    {
        $this->goods_pickup_info = $goods_pickup_info;
    }

    /**
     * @param mixed $goods_delivery_info
     */
    public function setGoodsDeliveryInfo($goods_delivery_info): void
    {
        $this->goods_delivery_info = $goods_delivery_info;
    }

    /**
     * @param mixed $expected_pickup_time
     */
    public function setExpectedPickupTime($expected_pickup_time): void
    {
        $this->expected_pickup_time = $expected_pickup_time;
    }

    /**
     * @param mixed $expected_delivery_time
     */
    public function setExpectedDeliveryTime($expected_delivery_time): void
    {
        $this->expected_delivery_time = $expected_delivery_time;
    }

    /**
     * @param mixed $order_type
     */
    public function setOrderType($order_type): void
    {
        $this->order_type = $order_type;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * @param mixed $rider_pick_method
     */
    public function setRiderPickMethod($rider_pick_method): void
    {
        $this->rider_pick_method = $rider_pick_method;
    }

    /**
     * @param mixed $tip_amount
     */
    public function setTipAmount($tip_amount): void
    {
        $this->tip_amount = $tip_amount;
    }

    /**
     * @param mixed $goods_code_switch
     */
    public function setGoodsCodeSwitch($goods_code_switch): void
    {
        $this->goods_code_switch = $goods_code_switch;
    }

    /**
     * @param mixed $prohibit_recommend_coupons
     */
    public function setProhibitRecommendCoupons($prohibit_recommend_coupons): void
    {
        $this->prohibit_recommend_coupons = $prohibit_recommend_coupons;
    }
}