<?php

namespace Behavioral\Mediator;

class Product
{
    private $amount;

    public function __construct(int $amount = 0)
    {
        $this->amount = $amount;
    }

    public function decrease(int $amount): int
    {
        $this->amount -= $amount;

        return $this->amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}
