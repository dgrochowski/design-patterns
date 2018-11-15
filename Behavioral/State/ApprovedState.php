<?php

namespace Behavioral\State;

final class ApprovedState implements State
{
    public function __toString(): string
    {
        return 'approved' . "\n";
    }
}
