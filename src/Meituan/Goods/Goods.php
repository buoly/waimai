<?php

namespace Waimai\Meituan\Goods;

use Waimai\Meituan\Client;

class Goods extends Client
{
    /**
     * 创建药品分类
     *
     * @return array
     */
    public function saveCat($params)
    {
        return $this->json('medicineCat/save', $params);
    }

    /**
     * 更新药品分类
     *
     * @return array
     */
    public function updateCat($params)
    {
        return $this->json('medicineCat/update', $params);
    }

    /**
     * 删除药品分类
     *
     * @return array
     */
    public function deleteCat($params)
    {
        return $this->json('medicineCat/delete', $params);
    }

    /**
     * 查询门店药品分类列表
     *
     * @return array
     */
    public function catsCat($params)
    {
        return $this->get('medicineCat/list', $params);
    }


    /**
     * 创建药品
     *
     * @return array
     */
    public function save($params)
    {
        return $this->json('medicine/save', $params);
    }

    /**
     * 更新药品
     *
     * @return array
     */
    public function update($params)
    {
        return $this->json('medicine/update', $params);
    }

    /**
     * 批量创建药品
     *
     * @return array
     */
    public function batchsave($params)
    {
        return $this->json('medicine/batchsave', $params);
    }

    /**
     * 批量更新药品
     *
     * @return array
     */
    public function batchupdate($params)
    {
        return $this->json('medicine/batchupdate', $params);
    }

    /**
     * 删除药品
     *
     * @return array
     */
    public function delete($params)
    {
        return $this->json('medicine/delete', $params);
    }

    /**
     * 查询门店药品列表
     *
     * @return array
     */
    public function listGoods($params)
    {
        return $this->get('medicine/list', $params);
    }

    /**
     * 更新药品库存
     *
     * @return array
     */
    public function stock($params)
    {
        return $this->json('medicine/stock', $params);
    }

    /**
     * 更新药品价格
     *
     * @return array
     */
    public function price($params)
    {
        return $this->json('medicine/price', $params);
    }
}