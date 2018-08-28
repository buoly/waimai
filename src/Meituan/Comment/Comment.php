<?php

namespace Waimai\Meituan\Comment;

use Waimai\Meituan\Client;

class Comment extends Client
{

    /**
     * 根据门店id批量查询评价信息（新版）
     *
     * @return array
     */
    public function query($params)
    {
        return $this->get('comment/query', $params);
    }

    /**
     * 根据评价id添加商家回复
     *
     * @return array
     */
    public function add_reply($params)
    {
        return $this->json('poi/comment/add_reply', $params);
    }

    /**
     * 通过门店ID获取当前门店评分
     *
     * @return array
     */
    public function score($params)
    {
        return $this->get('comment/score', $params);
    }
}