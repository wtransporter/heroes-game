<?php

namespace app\core\heroes;

use app\core\Gamer;
use app\core\exceptions\WeaponNotAllowedException;
use app\core\monsters\Monster;

abstract class Hero extends Gamer
{
    public array $weapons = [];
    protected int $health;

    abstract protected function allowedWeapons(): array;
    abstract public function hitMonster(): int;

    public function getWeapon(string $weapon): void
    {
        $this->validate($weapon);
        $this->weapons[] = $weapon;
    }
    
    public function throwWeapon(string $weapon): void
    {
        $start = array_search($weapon, $this->weapons);
        array_splice($this->weapons, $start, 1);
    }

    protected function validate($weapon)
    {
        if (count($this->weapons) >= 2) {
            throw new \Exception("You are not allowed to carry more than two weapons.");
        }

        if (!in_array($weapon, $this->allowedWeapons())) {
            throw new WeaponNotAllowedException("This weapon is not allowed");
        }
    }

    public function attack(Monster $monster)
    {
        $damage = $this->hitMonster();
        $monster->reduceHealth($damage);
    }
}