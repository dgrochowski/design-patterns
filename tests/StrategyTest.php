<?php

namespace Tests;

use Behavioral\Strategy\Eco;
use Behavioral\Strategy\Mode;
use Behavioral\Strategy\Sport;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testEcoMode()
    {
        $mode = new Mode(new Eco);
        $mode->info();

        $this->assertSame('low', $mode->getStrategy()->getFuelConsumption());
        $this->assertSame('low', $mode->getStrategy()->getPower());

        echo "\n";
    }

    public function testSportMode()
    {
        $mode = new Mode(new Sport);
        $mode->info();

        $this->assertSame('high', $mode->getStrategy()->getFuelConsumption());
        $this->assertSame('high', $mode->getStrategy()->getPower());

        echo "\n";
    }
}
