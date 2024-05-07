<?php

namespace Furqat\Framework\Foundation;

use Exception;

class Container {
    private array $bindings = [];

    public function bind($key, $resolver): static
    {
        $this->bindings[$key] = $resolver;
        return $this;
    }

    /**
     * @throws Exception
     */
    public function resolve($key, ...$params) {
        if (isset($this->bindings[$key])) {
            $resolver = $this->bindings[$key];
            return $resolver(...$params);
        }

        throw new Exception("{$key} is not bound in the container.");
    }
}