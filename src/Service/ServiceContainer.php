<?php

namespace Waimai\Service;

use Pimple\Container;
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class ServiceContainer extends Container
{
    protected $providers = [];
    protected $userConfig = [];
    protected $defaultConfig = [];

    public function __construct(array $config = [])
    {
        $this->registerProviders($this->providers);

        parent::__construct();

        $this->userConfig = $config;

        $this->initializeLogger();
    }

    /**
     * @throws \Exception
     */
    private function initializeLogger()
    {
        if (Log::hasLogger()) {
            return;
        }

        $log_name = $this->getConfig()['log']['name'] ?? 'waimai';
        $log_path = $this->getConfig()['log']['file'] ?? \sys_get_temp_dir().'/logs/waimai.log';
        $log_level = $this->getConfig()['log']['level'] ?? 'debug';
        $log_permission = $this->getConfig()['log']['permission'] ?? '0777';

        $logger = new Logger($log_name);

        $logger->pushHandler( new StreamHandler($log_path, $log_level, true, $log_permission, false) );

        Log::setLogger($logger);
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        $base = [
            'http' => [
                'timeout' => 30.0,
            ],
        ];

        return array_replace_recursive($base, $this->defaultConfig, $this->userConfig);
    }

    /**
     * @param string $id
     * @param mixed  $value
     */
    public function rebind($id, $value)
    {
        $this->offsetUnset($id);
        $this->offsetSet($id, $value);
    }

    /**
     * Magic get access.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    /**
     * Magic set access.
     *
     * @param string $id
     * @param mixed  $value
     */
    public function __set($id, $value)
    {
        $this->offsetSet($id, $value);
    }

    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}