<?php

namespace app\core;

use app\core\Heroes\Hero;
use app\core\logger\FileLogger;
use app\core\monsters\Monster;

class Game
{
    protected Hero $hero;
    protected Monster $monster;
    protected string $winner = '';

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

        for ($i = 0; $i <= 20; $i++) {
            $randomNumber = rand(0, 100);
            
            if ($this->hero->getHealth() <= 0 && $this->monster->getHealth() <= 0) {
                app("logger")->log("No winner. It is draw");
                return;
            }

            if ($this->hero->getHealth() <= 0 && $this->monster->getHealth() > 0) {
                app("logger")->log("The monster won the battle with the hero");
                return;
            }
            
            if ($this->hero->getHealth() > 0 && $this->monster->getHealth() <= 0) {
                app("logger")->log("The hero won the battle with the monster");
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