<?php

namespace app\core\exceptions;

class WeaponNotAllowedException extends \Exception
{
    public $message = 'This Weapon is not allowed';
    public $code = 422;
}