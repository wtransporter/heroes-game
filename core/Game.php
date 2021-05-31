<?php

namespace app\core;

use app\core\Heroes\Hero;
use app\core\monsters\Monster;

class Game
{
    protected Hero $hero;
    protected Monster $monster;

    public function __construct(Hero $hero, Monster $monster)
    {
        $this->hero = $hero;
        $this->monster = $monster;
    }

    public function run()
    {
        try {
            $this->hero->getWeapon('magic');
            $this->hero->getWeapon('magic');
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }

        $randomNumber = rand(0, 100);

        for ($i = 0; $i <= 20; $i++) {
            
            if ($this->hero->getHealth() <= 0 || $this->monster->getHealth() <= 0) {
                echo 'Game over' . PHP_EOL;
                return;
            }

            if ($randomNumber >= 50) {
                $this->hero->attack($this->monster);
            } else {
                $this->monster->attack($this->hero);
            }
        }
    }
}