<?php

namespace app\core\Heroes;

use app\core\Heroes\Hero;

class HeroFactory
{
    public static function create(string $type): Hero
    {
        $fullClassName = __NAMESPACE__ . '\\' . ucwords($type);

        if (class_exists($fullClassName)) {
            return new $fullClassName();
        } else {
            throw new \Exception("Type not defined.");
        }
    }
}