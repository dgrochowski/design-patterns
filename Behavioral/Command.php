<?php

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

interface CommandInterface
{
    public function execute();
}

class EngineOnCommand implements CommandInterface
{
    private $engine;

    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function execute()
    {
        $this->engine->setState('on');
        echo "Engine with " . $this->engine->getHorsepower() . "hp is running\n";
    }
}

class EngineOffCommand implements CommandInterface
{
    private $engine;

    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function execute()
    {
        $this->engine->setState('off');
        echo "Engine with " . $this->engine->getHorsepower() . "hp is not running\n";
    }
}

/** EXAMPLE */
$engine = new Engine(100);
(new EngineOnCommand($engine))->execute();
(new EngineOffCommand($engine))->execute();
