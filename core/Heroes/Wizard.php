<?php

namespace app\core\heroes;

class Wizard extends Hero
{
    protected int $health = 150;
    
    public function getAttack(): array
    {
        return [20];
    }

    protected function allowedWeapons(): array
    {
        return ['magic'];
    }

    public function hitMonster(): int
    {
        return $this->getAttack()[0];
    }
}