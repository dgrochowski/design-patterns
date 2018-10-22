<?php

final class Water
{
    public function add(int $amount): void
    {
        echo $amount . "ml of water was added\n";
    }
}

final class Milk
{
    public function add(int $amount): void
    {
        echo $amount . "ml of milk was added\n";
    }
}

final class Coffee
{
    public function add(int $amount): void
    {
        echo $amount . "ml of coffee was added\n";
    }
}

interface Mediator
{
    public function espresso();
    public function flatWhite();
    public function americano();
}

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
        $this->coffee->add(30);
        echo "Espresso is ready!\n\n";
    }

    public function flatWhite()
    {
        $this->coffee->add(30);
        $this->milk->add(100);
        echo "Flat White is ready!\n\n";
    }

    public function americano()
    {
        $this->coffee->add(30);
        $this->water->add(100);
        echo "Cafe Americano is ready!\n\n";
    }
}

/** EXAMPLE */

$coffeeMachine = new CoffeeMachine(new Water(), new Milk(), new Coffee());

$coffeeMachine->americano();
$coffeeMachine->espresso();
$coffeeMachine->flatWhite();
