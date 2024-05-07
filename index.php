<?php

use Furqat\Framework\Http\Request;
use Furqat\Framework\Foundation\App;

require_once './vendor/autoload.php';

define('START', microtime(true));
define('APP', App::getInstance());


app()->start();
app()->bind(Request::class, function () {
    return new Request();
});

$request = app()->resolve(Request::class);

//$request = new Request();
//
//echo $request->method();

//$router = new \Furqat\Framework\Http\Router();

//echo $router->parse($router->uri());
