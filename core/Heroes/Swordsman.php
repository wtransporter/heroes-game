<?php

namespace app\core\heroes;

class Swordsman extends Hero
{
    protected int $health = 100;

    public function getAttack(): array
    {
        return [10, 15];
    }

    protected function allowedWeapons(): array
    {
        return ['sword', 'spear'];
    }

    public function hitMonster(): int
    {
        $random = rand(0, 1);
        return $this->getAttack()[$random];
    }
}