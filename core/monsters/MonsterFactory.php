<?php

namespace app\core\monsters;

use app\core\monsters\Monster;

class MonsterFactory
{
    public static function create(string $type): Monster
    {
        $fullClassName = __NAMESPACE__ . '\\' . ucwords($type);

        if (class_exists($fullClassName)) {
            return new $fullClassName();
        } else {
            throw new \Exception("Type not defined.");
        }
    }
}