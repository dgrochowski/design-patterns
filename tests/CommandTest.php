<?php

namespace Tests;

use Behavioral\Command\Engine;
use Behavioral\Command\EngineOffCommand;
use Behavioral\Command\EngineOnCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testEngine()
    {
        $engine = new Engine(100);
        $this->assertSame(100, $engine->getHorsepower());

        (new EngineOnCommand($engine))->execute();
        $this->assertSame('on', $engine->getState());

        (new EngineOffCommand($engine))->execute();
        $this->assertSame('off', $engine->getState());

        echo "\n";
    }
}
