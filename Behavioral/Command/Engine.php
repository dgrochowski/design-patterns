<?php

namespace Behavioral\Command;

class Engine
{
    private $state;
    private $horsepower;

    public function __construct(int $horsepower)
    {
        $this->state = 'off';
        $this->horsepower = $horsepower;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getHorsepower(): int
    {
        return $this->horsepower;
    }
}
