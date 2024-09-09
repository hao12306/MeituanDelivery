<?php

namespace MeituanDelivery;

use MeituanDelivery\const\MeituanConst;
use MeituanDelivery\req\MeituanCompensationAppealReq;
use MeituanDelivery\req\MeituanCompensationApplyReq;
use MeituanDelivery\req\MeituanCompensationDetailReq;
use MeituanDelivery\req\MeituanFileImageUploadReq;
use MeituanDelivery\req\MeituanMealCodeSaveMealCodeByPkgIdReq;
use MeituanDelivery\req\MeituanOrderAddTipReq;
use MeituanDelivery\req\MeituanOrderCreateByShopReq;
use MeituanDelivery\req\MeituanOrderDeleteReq;
use MeituanDelivery\req\MeituanOrderEvaluateReq;
use MeituanDelivery\req\MeituanOrderPreCreateByShopReq;
use MeituanDelivery\req\MeituanOrderRiderLocationH5urlReq;
use MeituanDelivery\req\MeituanOrderRiderLocationReq;
use MeituanDelivery\req\MeituanOrderStatusQueryReq;
use MeituanDelivery\req\MeituanShopAreaQueryReq;
use MeituanDelivery\req\MeituanShopBalanceQueryReq;
use MeituanDelivery\req\MeituanShopCreateReq;
use MeituanDelivery\req\MeituanShopQueryReq;
use MeituanDelivery\req\MeituanShopUpdateReq;

/**
 * 美团配送 入口类
 */
class Meituan extends MeituanBase
{
    use MeituanConst;

    public function __construct(string $appkey, string $secret)
    {
        //父类处理
        parent::__construct($appkey, $secret);
    }

    /**
     * 创建门店
     */
    public function shopCreate(MeituanShopCreateReq $req)
    {
        return $this->request($this->SHOP_CREATE, $req);
    }

    /**
     * 修改门店
     */
    public function shopUpdate(MeituanShopUpdateReq $req)
    {
        return $this->request($this->SHOP_UPDATE, $req);
    }

    /**
     * 查询门店信息
     */
    public function shopQuery(MeituanShopQueryReq $req)
    {
        return $this->request($this->SHOP_QUERY, $req);
    }

    /**
     * 查询门店配送范围
     */
    public function shopAreaQuery(MeituanShopAreaQueryReq $req)
    {
        return $this->request($this->SHOP_AREA_QUERY, $req);
    }

    /**
     * 查询门店账户余额
     */
    public function shopBalanceQuery(MeituanShopBalanceQueryReq $req)
    {
        return $this->request($this->SHOP_BALANCE_QUERY, $req);
    }

    /**
     * 发单前预览
     */
    public function orderPreCreateByShop(MeituanOrderPreCreateByShopReq $req)
    {
        return $this->request($this->ORDER_PRECREATEBYSHOP, $req);
    }

    /**
     * 发单
     */
    public function orderCreateByShop(MeituanOrderCreateByShopReq $req)
    {
        return $this->request($this->ORDER_CREATEBYSHOP, $req);
    }

    /**
     * 查询订单状态
     */
    public function orderStatusQuery(MeituanOrderStatusQueryReq $req)
    {
        return $this->request($this->ORDER_STATUS_QUERY, $req);
    }

    /**
     * 获取骑手位置
     */
    public function orderRiderLocation(MeituanOrderRiderLocationReq $req)
    {
        return $this->request($this->ORDER_RIDER_LOCATION, $req);
    }

    /**
     * 取消订单
     */
    public function orderDelete(MeituanOrderDeleteReq $req)
    {
        return $this->request($this->ORDER_DELETE, $req);
    }

    /**
     * 取餐码信息下发
     */
    public function mealCodeSaveMealCodeByPkgId(MeituanMealCodeSaveMealCodeByPkgIdReq $req)
    {
        return $this->request($this->MEALCODE_SAVEMEALCODEBYPKGID, $req);
    }

    /**
     * 获取骑手位置H5页面
     */
    public function orderRiderLocationH5url(MeituanOrderRiderLocationH5urlReq $req)
    {
        return $this->request($this->ORDER_RIDER_LOCATION_H5URL, $req);
    }

    /**
     * 为骑手增加小费
     */
    public function orderAddTip(MeituanOrderAddTipReq $req)
    {
        return $this->request($this->ORDER_ADDTIP, $req);
    }

    /**
     * 评价骑手服务
     */
    public function orderEvaluate(MeituanOrderEvaluateReq $req)
    {
        return $this->request($this->ORDER_EVALUATE, $req);
    }

    /**
     * 发起餐损申请
     */
    public function compensationApply(MeituanCompensationApplyReq $req)
    {
        return $this->request($this->COMPENSATION_APPLY, $req);
    }

    /**
     * 发起餐损申诉
     */
    public function compensationAppeal(MeituanCompensationAppealReq $req)
    {
        return $this->request($this->COMPENSATION_APPEAL, $req);
    }

    /**
     * 查询餐损审核记录
     */
    public function compensationDetail(MeituanCompensationDetailReq $req)
    {
        return $this->request($this->COMPENSATION_DETAIL, $req);
    }

    /**
     * 图片上传接口
     */
    public function fileImageUpload(MeituanFileImageUploadReq $req)
    {
        return $this->request($this->FILE_IMAGE_UPLOAD, $req);
    }
}