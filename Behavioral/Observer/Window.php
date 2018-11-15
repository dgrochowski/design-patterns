<?php

namespace Behavioral\Observer;

class Window implements \SplObserver
{
    private $position;

    public function __construct(string $position)
    {
        $this->position = $position;
    }

    public function update(\SplSubject $subject): void
    {
        if ($subject->isLocked()) {
            echo $this->position . " window has been closed\n";
        }
    }
}
