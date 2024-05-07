<?php

namespace Furqat\Framework\Types;

use Closure;

class Route
{

    public string $path;
    public string $method;
    public ?string $controller;
    public Closure|string $action;


    public function __construct(string $path, string $method, ?string $controller, Callable|string $action)
    {
        $this->path = $path;
        $this->method = $method;
        $this->controller = $controller;
        $this->action = $action;
    }

    public function setPath(string $path): static
    {
        $this->path = $path;
        return $this;
    }

    public function setMethod(string $method): static
    {
        $this->method = $method;
        return $this;
    }

    public function setController(string $controller): static
    {
        $this->controller = $controller;
        return $this;
    }

    public function setAction(Closure|string $action): static
    {
        $this->action = $action;
        return $this;
    }
}