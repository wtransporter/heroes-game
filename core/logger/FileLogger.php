<?php

namespace app\core\logger;

use app\core\logger\LoggerInterface;

class FileLogger implements LoggerInterface
{
    public function log(string $message)
    {
        $file = fopen("log.txt", "a+");
        fwrite($file, $message . PHP_EOL);
        fclose($file);
    }
}