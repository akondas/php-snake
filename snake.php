<?php

namespace Game;

include 'vendor/autoload.php';

use PhpSnake\Game\Board;
use PhpSnake\Game\Drawer;

$board = new Board(40, 10);
$drawer = new Drawer(STDOUT);

$drawer->drawMap($board->getMap());
