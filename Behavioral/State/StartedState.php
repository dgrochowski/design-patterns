<?php

namespace Behavioral\State;

final class StartedState implements State
{
    public function __toString(): string
    {
        return 'started';
    }
}
