<?php

namespace app\core\monsters;

class Spider extends Monster
{
    public function getAttack(): array
    {
        return [5, 8];
    }
}