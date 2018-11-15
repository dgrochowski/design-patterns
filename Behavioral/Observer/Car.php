<?php

namespace Behavioral\Observer;

class Car implements \SplSubject
{
    private $observers;
    private $locked = false;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /** @var \SplObserver $observer */
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    public function lock(): void
    {
        echo "\nLOCKING THE CAR\n";
        $this->locked = true;
        $this->notify();
    }

    public function unlock(): void
    {
        echo "\nUNLOCKING THE CAR\n";
        $this->locked = false;
        $this->notify();
    }

    public function isLocked(): bool
    {
        return $this->locked;
    }
}
