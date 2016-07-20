<?php

declare (strict_types = 1);

namespace PhpSnake;

use PhpSnake\Game\Board;
use PhpSnake\Game\Drawer;

class Game
{
    /**
     * @var Terminal
     */
    private $terminal;

    /**
     * @var Board
     */
    private $board;

    /**
     * @var Drawer
     */
    private $drawer;

    public function __construct()
    {
        $this->terminal = new Terminal();
        $this->board = new Board(intval($this->terminal->getWidth()/2), 20);
        $this->drawer = new Drawer(STDOUT);

        $this->drawer->drawMap($this->board->getMap());
    }

    public function run()
    {

    }

}
