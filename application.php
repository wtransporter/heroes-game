<?php

require_once './vendor/autoload.php';
require_once './helpers/helpers.php';

use app\core\App;
use app\core\Game;
use app\core\Heroes\HeroFactory;
use app\core\logger\ConsoleLogger;
use app\core\monsters\MonsterFactory;

App::bind("logger", new ConsoleLogger());

$hero = HeroFactory::create('Wizard');
$monster = MonsterFactory::create('Dragon');

$game = new Game($hero, $monster);

$game->run();