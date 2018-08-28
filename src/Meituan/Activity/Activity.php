<?php

namespace Waimai\Meituan\Activity;

use Waimai\Meituan\Client;

class Activity extends Client
{

    /**
     * 批量创建或更新折扣商品
     *
     * @return array
     */
    public function batchsave($params)
    {
        return $this->json('act/discount/batchsave', $params);
    }

    /**
     * 批量删除折扣商品
     *
     * @return array
     */
    public function delete($params)
    {
        return $this->json('act/discount/delete', $params);
    }

    /**
     * 批量修改折扣商品当日活动库存
     *
     * @return array
     */
    public function stock($params)
    {
        return $this->json('act/discount/stock', $params);
    }

    /**
     * 批量查询门店折扣商品
     *
     * @return array
     */
    public function acts($params)
    {
        return $this->get('act/discount/list', $params);
    }

    /**
     * 修改门店每单折扣商品限购数量
     *
     * @return array
     */
    public function activity_order_limit($params)
    {
        return $this->json('act/discount/activity_order_limit', $params);
    }

    /**
     * 批量创建/更新第二份半价商品
     *
     * @return array
     */
    public function batchsaveHalf($params)
    {
        return $this->json('act/second/half/batchsave', $params);
    }

    /**
     * 批量删除第二份半价商品
     *
     * @return array
     */
    public function deleteHalf($params)
    {
        return $this->json('act/second/half/delete', $params);
    }

    /**
     * 批量修改第二份半价商品当日活动库存
     *
     * @return array
     */
    public function stockHalf($params)
    {
        return $this->json('act/second/half/stock', $params);
    }

    /**
     * 批量查询门店第二份半价商品
     *
     * @return array
     */
    public function listHalf($params)
    {
        return $this->get('act/second/half/list', $params);
    }

    /**
     * 批量创建买赠活动
     *
     * @return array
     */
    public function batchsaveBuy($params)
    {
        return $this->json('act/buygifts/batchsave', $params);
    }

    /**
     * 批量删除买赠活动
     *
     * @return array
     */
    public function deleteBuy($params)
    {
        return $this->json('act/buygifts/delete', $params);
    }

    /**
     * 批量修改买赠活动当日活动库存
     *
     * @return array
     */
    public function stockBuy($params)
    {
        return $this->json('act/buygifts/stock', $params);
    }

    /**
     * 批量查询门店买赠活动
     *
     * @return array
     */
    public function listBuy($params)
    {
        return $this->get('act/buygifts/list', $params);
    }
}