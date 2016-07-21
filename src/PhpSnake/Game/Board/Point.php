<?php

declare (strict_types = 1);

namespace PhpSnake\Game\Board;

class Point
{
    /**
     * @var int
     */
    private $row;

    /**
     * @var int
     */
    private $col;

    /**
     * @var string
     */
    private $char;

    /**
     * @param int    $row
     * @param int    $col
     * @param string $char
     */
    public function __construct(int $row, int $col, string $char)
    {
        $this->row = $row;
        $this->col = $col;
        $this->char = $char;
    }

    /**
     * @return int
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @return int
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * @return string
     */
    public function getChar()
    {
        return $this->char;
    }

    /**
     * @param string $char
     */
    public function setChar($char)
    {
        $this->char = $char;
    }

    /**
     * @param Point $point
     * 
     * @return bool
     */
    public function overlaps(Point $point)
    {
        return $this->row == $point->getRow() && $this->col == $point->getCol();
    }
}
