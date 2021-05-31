<?php

namespace app\core;

abstract class Gamer
{
    protected int $health = 100;

    public function reduceHealth(int $value): void
    {
        $this->health -= $value;
    }

    public function getHealth(): int
    {
        return $this->health;
    }
}