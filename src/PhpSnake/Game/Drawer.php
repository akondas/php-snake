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
     * @param Board $board
     */
    public function draw(Board $board)
    {
        $this->hideCursor();
        $this->moveCursorToStart();

        $this->newLine();

        foreach ($board->getMap() as $line) {
            foreach ($line as $char) {
                fwrite($this->stream, $char);
            }
            $this->newLine();
        }

        $this->showCursor();
    }

    private function newLine()
    {
        fwrite($this->stream, PHP_EOL);
    }

    private function moveCursorToStart()
    {
        fwrite($this->stream, "\033[0;0f");
    }

    private function hideCursor()
    {
        fwrite($this->stream, "\033[?25l");
    }

    private function showCursor()
    {
        fwrite($this->stream, "\033[?25h\033[?0c");
    }
}
