<?php

namespace app\core\logger;

use app\core\logger\LoggerInterface;

class ConsoleLogger implements LoggerInterface
{
    public function log(string $message)
    {
        echo "\e[32m$message\e[0m" . PHP_EOL;
    }
}