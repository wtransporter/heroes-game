<?php

namespace app\core\logger;

class FileLogger
{
    public static function log(string $message)
    {
        $file = fopen("log.txt", "a+");
        fwrite($file, $message . PHP_EOL);
        fclose($file);
    }
}