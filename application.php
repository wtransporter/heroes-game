<?php

require_once './vendor/autoload.php';
require_once './helpers/helpers.php';

use app\core\App;
use app\core\Game;
use app\core\logger\ConsoleLogger;
use app\core\Heroes\Wizard;
use app\core\monsters\Dragon;

App::bind("logger", new ConsoleLogger());

$hero = new Wizard();
$monster = new Dragon();

$game = new Game($hero, $monster);

$game->run();