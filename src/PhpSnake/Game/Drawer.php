<?php

declare (strict_types = 1);

namespace PhpSnake\Game;

class Drawer
{
    /**
     * @var string
     */
    private $stream;

    /**
     * @param resource $stream
     */
    public function __construct($stream)
    {
        $this->stream = $stream;
    }

    /**
     * @param array $map
     */
    public function drawMap(array $map)
    {
        $this->newLine();

        foreach ($map as $line) {
            foreach ($line as $char) {
                fwrite($this->stream, $char);
            }
            $this->newLine();
        }
    }

    private function newLine()
    {
        fwrite($this->stream, PHP_EOL);
    }
}
