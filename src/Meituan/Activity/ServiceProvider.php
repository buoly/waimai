<?php

namespace Waimai\Meituan\Activity;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['activity'] = function ($app) {
            return new Activity($app);
        };
    }
}