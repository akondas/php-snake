<?php

declare (strict_types = 1);

namespace tests\PhpSnake;

use PhpSnake\Terminal;

class TerminalTest extends \PHPUnit_Framework_TestCase
{
    public function testTerminalMetrics()
    {
        $terminal = new Terminal();

        $this->assertGreaterThan(0, $terminal->getHeight());
        $this->assertGreaterThan(0, $terminal->getWidth());
    }
}
