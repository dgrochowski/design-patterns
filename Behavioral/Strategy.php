<?php

interface Strategy
{
    public function getFuelConsumption(): string;
    public function getPower(): string;
}

class Eco implements Strategy
{
    public function getFuelConsumption(): string
    {
        return 'low';
    }

    public function getPower(): string
    {
        return 'low';
    }
}

class Sport implements Strategy
{
    public function getFuelConsumption(): string
    {
        return 'high';
    }

    public function getPower(): string
    {
        return 'high';
    }
}

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
            'This mode provides '
            . $this->strategy->getFuelConsumption()
            . ' fuel consumption and '
            . $this->strategy->getPower()
            . ' power!'
            . "\n"
        ;
    }
}

/** EXAMPLE */

$ecoMode = new Mode(new Eco);
$sportMode = new Mode(new Sport);

$ecoMode->info();
$sportMode->info();
