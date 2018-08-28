<?php

namespace Waimai\Meituan\Shop;

use Waimai\Meituan\Client;

class Shop extends Client
{
    /**
     * 创建或更新门店信息
     *
     * @return array
     */
    public function save($params)
    {
        return $this->json('poi/save', $params);
    }

    /**
     * 获取门店ID
     *
     * @return array
     */
    public function getids($params)
    {
        return $this->get('poi/getids', $params);
    }

    /**
     * 批量获取门店详细信息
     *
     * @return array
     */
    public function mget($params)
    {
        return $this->get('poi/mget',$params);
    }

    /**
     * 门店设置为营业状态
     *
     * @return array
     */
    public function open($params)
    {
        return $this->json('poi/open', $params);
    }

    /**
     * 门店设置为休息状态
     *
     * @return array
     */
    public function close($params)
    {
        return $this->json('poi/close', $params);
    }

    /**
     * 门店设置为下线状态
     *
     * @return array
     */
    public function offline($params)
    {
        return $this->json('poi/offline', $params);
    }

    /**
     * 门店设置为上线状态
     *
     * @return array
     */
    public function online($params)
    {
        return $this->json('poi/online', $params);
    }

    /**
     * 更改门店公告信息
     *
     * @return array
     */
    public function updatepromoteinfo($params)
    {
        return $this->json('poi/updatepromoteinfo', $params);
    }

    /**
     * 获取门店品类列表
     *
     * @return array
     */
    public function tags($params)
    {
        return $this->json('poiTag/list', $params);
    }

    /**
     * 更新门店营业时间
     *
     * @return array
     */
    public function updateTime($params)
    {
        return $this->json('shippingtime/update', $params);
    }

    /**
     * 查询门店是否延迟发配送
     *
     * @return array
     */
    public function isDelayPush($params)
    {
        return $this->json('poi/logistics/isDelayPush', $params);
    }

    /**
     * 设置门店延迟发配送时间
     *
     * @return array
     */
    public function setDelayPush($params)
    {
        return $this->json('poi/logistics/setDelayPush', $params);
    }

    /**
     * 创建/更新门店配送范围
     *
     * @return array
     */
    public function saveRange($params)
    {
        return $this->json('shipping/save', $params);
    }

    /**
     * 获取门店配送范围
     *
     * @return array
     */
    public function shippings($params)
    {
        return $this->get('shipping/list', $params);
    }

    /**
     * 批量创建/更新配送范围
     *
     * @return array
     */
    public function batchsave($params)
    {
        return $this->json('shipping/batchsave', $params);
    }

    /**
     * 获取门店配送范围（混合送）
     *
     * @return array
     */
    public function fetch($params)
    {
        return $this->get('shipping/fetch', $params);
    }

    /**
     * 删除配送范围
     *
     * @return array
     */
    public function delete($params)
    {
        return $this->json('shipping/delete', $params);
    }

    /**
     * 新增/更新特殊时段配送范围
     *
     * @return array
     */
    public function spec($params)
    {
        return $this->json('shipping/spec/save', $params);
    }
}