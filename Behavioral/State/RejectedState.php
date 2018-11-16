<?php

namespace Behavioral\State;

final class RejectedState implements State
{
    public function __toString(): string
    {
        return 'rejected' . "\n";
    }
}
