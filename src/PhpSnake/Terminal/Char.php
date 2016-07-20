<?php

declare (strict_types = 1);

namespace PhpSnake\Terminal;

class Char
{
    /**
     * @return string
     */
    public static function block()
    {
        return self::get('2588');
    }

    /**
     * @return string
     */
    public static function shadeBlock()
    {
        return self::get('2591');
    }

    /**
     * @return string
     */
    public static function boxTopLeft()
    {
        return self::get('2554');
    }

    /**
     * @return string
     */
    public static function boxTopRight()
    {
        return self::get('2557');
    }

    /**
     * @return string
     */
    public static function boxBottomLeft()
    {
        return self::get('255a');
    }

    /**
     * @return string
     */
    public static function boxBottomRight()
    {
        return self::get('255d');
    }

    /**
     * @return string
     */
    public static function boxHorizontal()
    {
        return self::get('2550');
    }

    /**
     * @return string
     */
    public static function boxVertical()
    {
        return self::get('2551');
    }

    /**
     * @param string $code
     *
     * @return string
     */
    private static function get(string $code): string
    {
        return html_entity_decode(sprintf('&#x%s;', $code), ENT_NOQUOTES, 'UTF-8');
    }
}
