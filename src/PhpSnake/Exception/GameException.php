<?php

declare (strict_types = 1);

namespace PhpSnake\Exception;

class GameException extends \Exception
{
    /**
     * @return GameException
     */
    public static function snakeCollision()
    {
        return new self('Snake collision');
    }
}
