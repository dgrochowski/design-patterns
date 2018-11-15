<?php

namespace Behavioral\State;

class Payment implements Context
{
    private $state;

    public function __construct()
    {
        $this->setState(new StartedState());
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
        echo 'Payment status: ' . $this->getState() . "\n";
    }
}
