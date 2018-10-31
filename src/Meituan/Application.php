<?php

namespace Waimai\Meituan;

use Waimai\Service\ServiceContainer;

class Application extends ServiceContainer
{
    protected $providers = [
        Activity\ServiceProvider::class,
        Comment\ServiceProvider::class,
        Goods\ServiceProvider::class,
        Order\ServiceProvider::class,
        Shop\ServiceProvider::class,
    ];
}
