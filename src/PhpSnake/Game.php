<?php

declare (strict_types = 1);

namespace PhpSnake;

use PhpSnake\Exception\GameException;
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
        $this->board = new Board(intval($this->terminal->getWidth() * .7), 20);
        $this->drawer = new Drawer(STDOUT);

        $this->drawBoard();
    }

    public function run()
    {
        try {
            while (true) {
                $input = $this->terminal->getChar();
                $this->board->moveSnake($input);
                $this->drawBoard();
                usleep(60000);
            }
        } catch (GameException $exception) {
            $this->gameOver();
        }
    }

    public function gameOver()
    {
        $this->board->writeGameOver();
        $this->drawBoard();
    }

    private function drawBoard()
    {
        $this->drawer->draw($this->board);
    }
}
