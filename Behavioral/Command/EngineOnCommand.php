<?php

namespace Behavioral\Command;

class EngineOnCommand implements Command
{
    private $engine;

    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function execute()
    {
        $this->engine->setState('on');
        echo "\nEngine with " . $this->engine->getHorsepower() . "hp is running";
    }
}
