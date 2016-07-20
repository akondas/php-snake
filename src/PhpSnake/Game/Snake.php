<?php

declare (strict_types = 1);

namespace PhpSnake\Game;

use PhpSnake\Game\Board\Point;
use PhpSnake\Terminal\Char;

class Snake
{
    /**
     * @var Point
     */
    private $head;

    /**
     * @var Point[]|array
     */
    private $tail = [];

    /**
     * @var string
     */
    private $direction = Direction::RIGHT;

    /**
     * @param int $row
     * @param int $col
     */
    public function __construct(int $row, int $col)
    {
        $this->head = new Point($row, $col, Char::block());

        for($i=1;$i<4;$i++) {
            $this->tail[] = new Point($row, $col - $i, Char::shadeBlock());
        }
    }

    /**
     * @return Point
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @return array|Point[]
     */
    public function getTail()
    {
        return $this->tail;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

}
