<?php

namespace Behavioral\Command;

class EngineOffCommand implements Command
{
    private $engine;

    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function execute()
    {
        $this->engine->setState('off');
        echo "\nEngine with " . $this->engine->getHorsepower() . "hp is not running";
    }
}
