<?php

declare (strict_types = 1);

namespace PhpSnake\Game;

use PhpSnake\Game\Board\Point;
use PhpSnake\Terminal\Char;

class Snake
{
    /**
     * @var Point[]|array
     */
    private $points;

    /**
     * @var string
     */
    private $direction = Direction::RIGHT;

    /**
     * @var int
     */
    private $boardRows;

    /**
     * @var int
     */
    private $boardCols;

    /**
     * @param int $boardRows
     * @param int $boardCols
     */
    public function __construct(int $boardRows, int $boardCols)
    {
        $head = new Point(intval($boardRows / 2), intval($boardCols / 2), Char::block());
        $this->boardCols = $boardCols;
        $this->boardRows = $boardRows;

        for ($i = 1;$i < 5;++$i) {
            $this->points[] = new Point($head->getRow(), $head->getCol() - $i, Char::shadeBlock());
        }
        array_unshift($this->points, $head);
    }

    public function move(string $input)
    {
        $this->changeDirection($input);

        $row = $this->points[0]->getRow();
        $col = $this->points[0]->getCol();

        switch ($this->direction) {
            case Direction::RIGHT:
                $col++;
                break;
            case Direction::LEFT:
                $col--;
                break;
            case Direction::UP:
                $row--;
                break;
            case Direction::DOWN:
                $row++;
                break;
        }

        if ($col >= $this->boardCols - 1) {
            $col = 1;
        } elseif ($col < 1) {
            $col = $this->boardCols - 2;
        }

        if ($row >= $this->boardRows - 1) {
            $row = 1;
        } elseif ($row < 1) {
            $row = $this->boardRows - 2;
        }

        $this->points[0]->setChar(Char::shadeBlock());
        array_unshift($this->points, new Point($row, $col, Char::block()));
        array_pop($this->points);
    }

    /**
     * @param string $input
     */
    private function changeDirection(string $input)
    {
        if ('w' === $input && $this->direction != Direction::DOWN) {
            $this->direction = Direction::UP;
        } elseif ('a' === $input && $this->direction != Direction::RIGHT) {
            $this->direction = Direction::LEFT;
        } elseif ('s' === $input && $this->direction != Direction::UP) {
            $this->direction = Direction::DOWN;
        } elseif ('d' === $input && $this->direction != Direction::LEFT) {
            $this->direction = Direction::RIGHT;
        }
    }

    /**
     * @return array|Point[]
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     */
    public function setDirection(string $direction)
    {
        $this->direction = $direction;
    }
}
