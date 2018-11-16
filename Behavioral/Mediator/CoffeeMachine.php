<?php

namespace Behavioral\Mediator;

class CoffeeMachine implements Mediator
{
    private $water;
    private $milk;
    private $coffee;

    public function __construct(Water $water, Milk $milk, Coffee $coffee)
    {
        $this->water = $water;
        $this->milk = $milk;
        $this->coffee = $coffee;
    }

    public function espresso()
    {
        echo "\n";
        $this->coffee->add(30);
        echo "Espresso is ready!\n";
    }

    public function flatWhite()
    {
        echo "\n";
        $this->coffee->add(30);
        $this->milk->add(100);
        echo "Flat White is ready!\n";
    }

    public function americano()
    {
        echo "\n";
        $this->coffee->add(30);
        $this->water->add(100);
        echo "Cafe Americano is ready!\n";
    }
}
