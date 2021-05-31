<?php

use app\core\App;

if (!function_exists('app')) {
    function app(string $key)
    {
        return App::get($key);
    }
}