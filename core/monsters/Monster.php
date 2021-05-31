<?php

namespace app\core\monsters;

use app\core\Gamer;
use app\core\heroes\Hero;

abstract class Monster extends Gamer
{
    protected int $health = 150;

    abstract public function getAttack(): array;

    public function attack(Hero $hero): void
    {
        $damage = $this->hitHero();
        $hero->reduceHealth($damage);
    }

    protected function hitHero(): int
    {
        $random = rand(0, 1);
        return (int) $this->getAttack()[$random];
    }
}