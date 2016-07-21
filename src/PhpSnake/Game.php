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
        $this->board = new Board(intval($this->terminal->getWidth() / 2), 20);
        $this->drawer = new Drawer(STDOUT);

        $this->drawer->draw($this->board);
    }

    public function run()
    {
        while (true) {
            $input = $this->terminal->getChar();
            $this->board->moveSnake($input);
            $this->drawer->draw($this->board);
            usleep(50000);
        }
    }
}
