<?php

namespace MeituanDelivery\const;

/**
 * 静态变量
 */
trait MeituanConst
{
    public $BASE_URL = 'https://peisongopen.meituan.com/api';
    public $VERSION = '1.0';
    public $SHOP_CREATE = '/shop/create';
    public $SHOP_UPDATE = '/shop/update';
    public $SHOP_QUERY = '/shop/query';
    public $SHOP_AREA_QUERY = '/shop/area/query';
    public $SHOP_BALANCE_QUERY = '/shop/balance/query';
    public $ORDER_PRECREATEBYSHOP = '/order/preCreateByShop';
    public $ORDER_CREATEBYSHOP = '/order/createByShop';
    public $ORDER_STATUS_QUERY = '/order/status/query';
    public $ORDER_RIDER_LOCATION = '/order/rider/location';
    public $ORDER_DELETE = '/order/delete';
    public $MEALCODE_SAVEMEALCODEBYPKGID = '/mealCode/saveMealCodeByPkgId';
    public $ORDER_RIDER_LOCATION_H5URL = '/order/rider/location/h5url';
    public $ORDER_ADDTIP = '/order/addTip';
    public $ORDER_EVALUATE = '/order/evaluate';
    public $COMPENSATION_APPLY = '/compensation/apply';
    public $COMPENSATION_APPEAL = '/compensation/appeal';
    public $COMPENSATION_DETAIL = '/compensation/detail';
    public $FILE_IMAGE_UPLOAD = '/file/image/upload';
}