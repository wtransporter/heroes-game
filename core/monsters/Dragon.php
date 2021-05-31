<?php

namespace app\core\monsters;

class Dragon extends Monster
{
    public function getAttack(): array
    {
        return [5, 20];
    }
}