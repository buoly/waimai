<?php

namespace Waimai\Meituan\Comment;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['comment'] = function ($app) {
            return new Comment($app);
        };
    }
}