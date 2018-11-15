<?php

namespace Tests;

use Behavioral\Mediator\Coffee;
use Behavioral\Mediator\CoffeeMachine;
use Behavioral\Mediator\Milk;
use Behavioral\Mediator\Water;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testProducts()
    {
        $water = new Water();
        $milk = new Milk();
        $coffee = new Coffee();

        $this->assertSame(0, $water->getAmount());
        $this->assertSame(0, $milk->getAmount());
        $this->assertSame(0, $coffee->getAmount());
    }

    public function testEspresso()
    {
        $water = new Water();
        $milk = new Milk();
        $coffee = new Coffee();

        $coffeeMachine = new CoffeeMachine($water, $milk, $coffee);

        $coffeeMachine->espresso();
        $this->assertSame(0, $water->getAmount());
        $this->assertSame(0, $milk->getAmount());
        $this->assertSame(-30, $coffee->getAmount());

        echo "\n";
    }

    public function testFlatWhite()
    {
        $water = new Water();
        $milk = new Milk();
        $coffee = new Coffee();

        $coffeeMachine = new CoffeeMachine($water, $milk, $coffee);

        $coffeeMachine->flatWhite();
        $this->assertSame(0, $water->getAmount());
        $this->assertSame(-100, $milk->getAmount());
        $this->assertSame(-30, $coffee->getAmount());

        echo "\n";
    }

    public function testAmericano()
    {
        $water = new Water();
        $milk = new Milk();
        $coffee = new Coffee();

        $coffeeMachine = new CoffeeMachine($water, $milk, $coffee);

        $coffeeMachine->americano();
        $this->assertSame(-100, $water->getAmount());
        $this->assertSame(0, $milk->getAmount());
        $this->assertSame(-30, $coffee->getAmount());

        echo "\n";
    }
}
