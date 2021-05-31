<?php

namespace app\core\exceptions;

class WeaponNotAllowedException extends \Exception
{
    public function __construct($message, $code = 422, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}