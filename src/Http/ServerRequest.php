<?php

namespace Furqat\Framework\Http;

use Furqat\Framework\Http\Interfaces\RequestInterface;

class ServerRequest implements RequestInterface
{

    protected array $data = [];

    public function __construct()
    {
        $this->data = $_SERVER;
    }


    public function get(string $name, ?string $default = null)
    {
        return $this->data[$name] ?? null;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function exists(string $name)
    {
        // TODO: Implement exists() method.
    }

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function only(array $names = [])
    {
        // TODO: Implement only() method.
    }
}