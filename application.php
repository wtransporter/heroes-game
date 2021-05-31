<?php

require_once './vendor/autoload.php';

use app\core\Game;
use app\core\Heroes\Wizard;
use app\core\monsters\Dragon;

$hero = new Wizard();
$monster = new Dragon();

$game = new Game($hero, $monster);

$game->run();