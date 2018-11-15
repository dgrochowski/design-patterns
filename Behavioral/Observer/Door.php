<?php

namespace Behavioral\Observer;

class Door implements \SplObserver
{
    private $position;

    public function __construct(string $position)
    {
        $this->position = $position;
    }

    public function update(\SplSubject $subject): void
    {
        if ($subject->isLocked()) {
            echo $this->position . " door has been locked\n";
            return;
        }

        echo $this->position . " door has been unlocked\n";
    }
}
