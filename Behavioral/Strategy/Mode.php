<?php

namespace Behavioral\Strategy;

class Mode
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function info(): void
    {
        echo
            "\n"
            . 'This mode provides '
            . $this->strategy->getFuelConsumption()
            . ' fuel consumption and '
            . $this->strategy->getPower()
            . ' power!'
            . "\n"
        ;
    }

    public function getStrategy(): Strategy
    {
        return $this->strategy;
    }
}
