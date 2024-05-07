<?php

use Furqat\Framework\Foundation\App;

if (!function_exists('dd')) {
    /**
     * @param $data
     * @return void
     */
    function dd($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }
}

if (!function_exists('app')) {
    /**
     * @return App
     */
    function app(): App
    {
        return APP;
    }
}