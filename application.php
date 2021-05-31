<?php

require_once './vendor/autoload.php';

use app\core\heroes\Wizard;
use app\core\monsters\Dragon;

$hero = new Wizard();
$monster = new Dragon();

try {
    $hero->getWeapon('magic');
    $hero->getWeapon('magic');
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

$randomNumber = rand(0, 100);

for ($i = 0; $i <= 20; $i++) {
    
    if ($hero->getHealth() <= 0 || $monster->getHealth() <= 0) {
        echo 'Game over';
        return;
    }

    if ($randomNumber >= 50) {
        $hero->attack($monster);
    } else {
        $monster->attack($hero);
    }
}
