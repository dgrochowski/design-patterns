<?php

namespace Behavioral\Strategy;

interface Strategy
{
    public function getFuelConsumption(): string;
    public function getPower(): string;
}
