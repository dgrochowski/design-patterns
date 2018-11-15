<?php

namespace Behavioral\State;

interface Context
{
    public function getState(): State;
    public function setState(State $state): void;
}
