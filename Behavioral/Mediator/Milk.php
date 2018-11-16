<?php

namespace Behavioral\Mediator;

final class Milk extends Product
{
    public function add(int $amount): void
    {
        $this->decrease($amount);
        echo $amount . "ml of milk was added\n";
    }
}
