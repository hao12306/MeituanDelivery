<?php

namespace MeituanDelivery\reqs;
/**
 * 修改门店
 */
class MeituanShopUpdateReq
{
    public $shop_id;
    public $shop_name;
    public $contact_name;
    public $contact_phone;
    public $contact_email;
    public $shop_address;
    public $shop_address_detail;
    public $pickup_address_desc;
    public $shop_guide_images;
    public $shop_lng;
    public $shop_lat;
    public $coordinate_type;
    public $delivery_service_codes;
    public $business_hours;

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param mixed $shop_name
     */
    public function setShopName($shop_name): void
    {
        $this->shop_name = $shop_name;
    }

    /**
     * @param mixed $contact_name
     */
    public function setContactName($contact_name): void
    {
        $this->contact_name = $contact_name;
    }

    /**
     * @param mixed $contact_phone
     */
    public function setContactPhone($contact_phone): void
    {
        $this->contact_phone = $contact_phone;
    }

    /**
     * @param mixed $contact_email
     */
    public function setContactEmail($contact_email): void
    {
        $this->contact_email = $contact_email;
    }

    /**
     * @param mixed $shop_address
     */
    public function setShopAddress($shop_address): void
    {
        $this->shop_address = $shop_address;
    }

    /**
     * @param mixed $shop_address_detail
     */
    public function setShopAddressDetail($shop_address_detail): void
    {
        $this->shop_address_detail = $shop_address_detail;
    }

    /**
     * @param mixed $pickup_address_desc
     */
    public function setPickupAddressDesc($pickup_address_desc): void
    {
        $this->pickup_address_desc = $pickup_address_desc;
    }

    /**
     * @param mixed $shop_guide_images
     */
    public function setShopGuideImages($shop_guide_images): void
    {
        $this->shop_guide_images = $shop_guide_images;
    }

    /**
     * @param mixed $shop_lng
     */
    public function setShopLng($shop_lng): void
    {
        $this->shop_lng = $shop_lng;
    }

    /**
     * @param mixed $shop_lat
     */
    public function setShopLat($shop_lat): void
    {
        $this->shop_lat = $shop_lat;
    }

    /**
     * @param mixed $coordinate_type
     */
    public function setCoordinateType($coordinate_type): void
    {
        $this->coordinate_type = $coordinate_type;
    }

    /**
     * @param mixed $delivery_service_codes
     */
    public function setDeliveryServiceCodes($delivery_service_codes): void
    {
        $this->delivery_service_codes = $delivery_service_codes;
    }

    /**
     * @param mixed $business_hours
     */
    public function setBusinessHours($business_hours): void
    {
        $this->business_hours = $business_hours;
    }
}