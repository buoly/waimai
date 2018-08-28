<?php

namespace Waimai\Meituan;

use Waimai\Service\ServiceContainer;

class Application extends ServiceContainer
{
    protected $providers = [
        Shop\ServiceProvider::class,
    ];
}
