<?php

namespace Behavioral\Strategy;

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
