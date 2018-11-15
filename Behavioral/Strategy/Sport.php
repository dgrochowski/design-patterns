<?php

namespace Behavioral\Strategy;

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
