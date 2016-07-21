<?php

declare (strict_types = 1);

namespace PhpSnake\Game\Board;

class Coin extends Point
{
    /**
     * @var string
     */
    private $char = "\033[42m\033[30m$\033[0m";

    /**
     * @param int $row
     * @param int $col
     */
    public function __construct(int $row, int $col)
    {
        parent::__construct($row, $col, $this->char);
    }
}
