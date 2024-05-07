<?php

namespace Furqat\Framework\Http\Interfaces;

interface RequestInterface
{

    public function get(string $name, ?string $default = null);

    public function toArray();

    public function exists(string $name);

    public function all();

    public function only(array $names = []);

}