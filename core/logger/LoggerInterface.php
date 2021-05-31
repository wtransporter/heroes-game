<?php

namespace app\core\logger;

interface LoggerInterface
{
    public function log(string $message);
}