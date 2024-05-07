<?php

namespace Furqat\Framework\Foundation;

use Furqat\Framework\Foundation\Container;
use Spatie\Ignition\Ignition;

class App
{

    protected Container $container;

    public function __construct()
    {
        $this->container = new Container();
    }

    public function getContainer(): Container
    {
        return $this->container;
    }

    public function bind(string $name, $resolver): void
    {
        $this->container->bind($name, $resolver);
    }

    /**
     * @throws \Exception
     */
    public function resolve(string $name)
    {
        return $this->container->resolve($name);
    }

    protected function registerExceptionHandler(): void
    {
        //TODO: Implement exception handler
    }

    public function start(): void
    {
        $this->registerExceptionHandler();
    }

    public static function getInstance(): App
    {
        return new self();
    }

}