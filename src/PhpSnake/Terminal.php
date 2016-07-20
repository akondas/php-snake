<?php

declare (strict_types = 1);

namespace PhpSnake;

class Terminal
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var
     */
    private $height;

    public function __construct()
    {
        $this->width = intval(`tput cols`);
        $this->height = intval(`tput lines`);
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight(): int
    {
        return $this->height;
    }

}
