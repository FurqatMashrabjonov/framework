<?php

namespace Furqat\Framework\Http;

use Closure;
use Furqat\Framework\Types\Route;

class Router
{

    protected array $routes = [];

    public function __construct()
    {
        //
    }

    public function uri(Request $request)
    {
        return $request->server('REQUEST_URI');
    }
    public function parse(string $path): string
    {
        return trim($path, '/');
    }

    public function addRoute(string $path, string $method, ?string $controller, Callable|string $action)
    {
        $this->routes[] = new Route($path, $method, $controller, $action);
    }

    /**
     * @throws \Exception
     */
    public function get(string $path, mixed $action)
    {
        if ($action instanceof Closure) {
            $controller = null;
        } else if (is_array($action)) {
            $controller = $action[0];
            $action = $action[1];
        }else if (is_string($action)) {
            $controller = $action;
            $action = null;
        } else {
            throw new \Exception("Invalid action type");
        }
        $this->addRoute($path, 'GET', $controller, $action);
    }
}