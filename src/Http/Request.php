<?php

namespace Furqat\Framework\Http;

use Furqat\Framework\Http\Interfaces\RequestInterface;

class Request implements RequestInterface
{

    protected array $data = [];
    protected ServerRequest $serverRequest;

    public function __construct()
    {
        $this->data = array_merge($_GET, $_POST);
        $this->serverRequest = new ServerRequest();
    }

    public function get(string $name, ?string $default = null)
    {
        return $this->data[$name] ?? $default;
    }

    public function __get(string $name)
    {
        return $this->get($name) ?? null;
    }

    public function server(string $name)
    {
        return $this->serverRequest->get($name);
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function exists(string $name): bool
    {
        return isset($this->data[$name]);
    }

    public function all()
    {
        //
    }

    public function only(array $names = [])
    {
        //
    }

    public function method()
    {
        return $this->serverRequest->get('REQUEST_METHOD');
    }
}