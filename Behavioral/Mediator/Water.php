<?php

namespace Behavioral\Mediator;

final class Water extends Product
{
    public function add(int $amount): void
    {
        $this->decrease($amount);
        echo $amount . "ml of water was added\n";
    }
}
