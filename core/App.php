<?php

namespace app\core;

class App
{
    protected static array $bindings = [];

    public static function bind(string $key, $value)
    {
        static::$bindings[$key] = $value;
    }
    
    public static function get(string $key)
    {
        if (array_key_exists($key, static::$bindings)) {
            return static::$bindings[$key];
        }
    }
}