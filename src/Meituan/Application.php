<?php

namespace Waimai\Meituan;

use Waimai\Service\ServiceContainer;

class Application extends ServiceContainer
{
    protected $providers = [
        Shop\ServiceProvider::class,
        Shop\ServiceProvider::class,
        Goods\ServiceProvider::class,
        Comment\ServiceProvider::class,
        Activity\ServiceProvider::class,
    ];
}
