<?php

declare (strict_types = 1);

namespace PhpSnake\Game;

class Board
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var array
     */
    private $map;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;

        $this->generateMap();
        $this->generateOutline();
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return array
     */
    public function getMap()
    {
        return $this->map;
    }


    private function generateMap()
    {
        for($i=0; $i<$this->width; $i++) {
            $this->map[$i] = array_fill(0, $this->height, null);
        }
    }

    private function generateOutline()
    {

    }

}
