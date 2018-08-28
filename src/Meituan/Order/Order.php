<?php

namespace Waimai\Meituan\Order;

use Waimai\Meituan\Client;

class Order extends Client
{

    /**
     * 设订单为商家已收到
     *
     * @return array
     */
    public function poi_received($params)
    {
        return $this->get('order/poi_received', $params);
    }

    /**
     * 商家确认订单（必接）
     *
     * @return array
     */
    public function confirm($params)
    {
        return $this->get('order/confirm', $params);
    }

    /**
     * 商家取消订单（必接）
     *
     * @return array
     */
    public function cancel($params)
    {
        return $this->get('order/cancel', $params);
    }

    /**
     * 订单配送中
     *
     * @return array
     */
    public function delivering($params)
    {
        return $this->get('order/delivering', $params);
    }

    /**
     * 订单已送达
     *
     * @return array
     */
    public function arrived($params)
    {
        return $this->get('order/arrived', $params);
    }

    /**
     * 订单确认退款请求（必接）
     *
     * @return array
     */
    public function agree($params)
    {
        return $this->get('order/refund/agree', $params);
    }

    /**
     * 驳回订单退款申请（必接）
     *
     * @return array
     */
    public function reject($params)
    {
        return $this->get('order/refund/reject', $params);
    }

    /**
     * 查询订单状态
     *
     * @return array
     */
    public function viewstatus($params)
    {
        return $this->get('order/viewstatus', $params);
    }

    /**
     * 查询活动信息
     *
     * @return array
     */
    public function getActDetailByAcId($params)
    {
        return $this->get('order/getActDetailByAcId', $params);
    }

    /**
     * 获取订单详细信息
     *
     * @return array
     */
    public function getOrderDetail($params)
    {
        return $this->get('order/getOrderDetail', $params);
    }

    /**
     * 下发美团配送订单
     *
     * @return array
     */
    public function push($params)
    {
        return $this->get('order/logistics/push', $params);
    }

    /**
     * 取消美团配送订单
     *
     * @return array
     */
    public function cancelPs($params)
    {
        return $this->get('order/logistics/cancel', $params);
    }

    /**
     * 获取配送订单状态
     *
     * @return array
     */
    public function statusPs($params)
    {
        return $this->get('order/logistics/status', $params);
    }

    /**
     * 获取最新日订单流水号
     *
     * @return array
     */
    public function getOrderDaySeq($params)
    {
        return $this->get('order/getOrderDaySeq', $params);
    }

    /**
     * 根据流水号获取订单ID
     *
     * @return array
     */
    public function getOrderIdByDaySeq($params)
    {
        return $this->get('order/getOrderIdByDaySeq', $params);
    }

    /**
     * 批量查询众包配送费
     *
     * @return array
     */
    public function shippingFee($params)
    {
        return $this->get('order/zhongbao/shippingFee', $params);
    }

    /**
     * 众包发配送
     *
     * @return array
     */
    public function dispatch($params)
    {
        return $this->get('order/zhongbao/dispatch', $params);
    }

    /**
     * 众包配送单追加小费
     *
     * @return array
     */
    public function tip($params)
    {
        return $this->get('order/zhongbao/update/tip', $params);
    }

    /**
     * 查询部分退款菜品详情
     *
     * @return array
     */
    public function getPartRefundFoods($params)
    {
        return $this->get('order/getPartRefundFoods', $params);
    }

    /**
     * 发起部分退款申请
     *
     * @return array
     */
    public function applyPartRefund($params)
    {
        return $this->json('order/applyPartRefund', $params);
    }

    /**
     * 催单回复接口
     *
     * @return array
     */
    public function remindReply($params)
    {
        return $this->json('order/remindReply', $params);
    }

    /**
     * 商家确认已完成出餐
     *
     * @return array
     */
    public function preparationMealComplete($params)
    {
        return $this->get('order/preparationMealComplete', $params);
    }

    /**
     * 商家获取备餐时间
     *
     * @return array
     */
    public function getPreparationMealTime($params)
    {
        return $this->get('order/getPreparationMealTime', $params);
    }

    /**
     * 得到隐私号降级通知后，通过此接口获取用户真实手机号
     *
     * @return array
     */
    public function batchPullPhoneNumber($params)
    {
        return $this->json('order/batchPullPhoneNumber', $params);
    }

    /**
     * 查询可申请餐损赔付的订单
     *
     * @return array
     */
    public function getSupportedCompensation($params)
    {
        return $this->get('order/getSupportedCompensation', $params);
    }

    /**
     * 申请餐损赔付
     *
     * @return array
     */
    public function applyCompensation($params)
    {
        return $this->json('order/applyCompensation', $params);
    }

    /**
     * 查询餐损赔付结果
     *
     * @return array
     */
    public function getCompensationResult($params)
    {
        return $this->get('order/getCompensationResult', $params);
    }

    /**
     * 专快混配送转为商家自配送
     *
     * @return array
     */
    public function poi_self($params)
    {
        return $this->json('order/logistics/change/poi_self', $params);
    }

    /**
     * 批量拉取异常订单
     *
     * @return array
     */
    public function batchFetchAbnormalOrder($params)
    {
        return $this->json('order/batchFetchAbnormalOrder', $params);
    }
}