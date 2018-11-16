<?php

namespace Behavioral\Mediator;

final class Coffee extends Product
{
    public function add(int $amount): void
    {
        $this->decrease($amount);
        echo $amount . "ml of coffee was added\n";
    }
}
