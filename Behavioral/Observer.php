<?php

class Door implements \SplObserver
{
    private $position;

    public function __construct(string $position)
    {
        $this->position = $position;
    }

    public function update(SplSubject $subject): void
    {
        if ($subject->isLocked()) {
            echo $this->position . " door has been locked\n";
            return;
        }

        echo $this->position . " door has been unlocked\n";
    }
}

class Window implements \SplObserver
{
    private $position;

    public function __construct(string $position)
    {
        $this->position = $position;
    }

    public function update(SplSubject $subject): void
    {
        if ($subject->isLocked()) {
            echo $this->position . " window has been closed\n";
        }
    }
}

class Car implements \SplSubject
{
    private $observers;
    private $locked = false;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /** @var SplObserver $observer */
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

/** EXAMPLE */

$car = new Car();

$frontLeftDoor = new Door('front-left');
$frontRightDoor = new Door('front-right');
$rearLeftDoor = new Door('rear-left');
$rearRightDoor = new Door('rear-right');
$car->attach($frontLeftDoor);
$car->attach($frontRightDoor);
$car->attach($rearLeftDoor);
$car->attach($rearRightDoor);

$car->lock();

$leftWindow = new Window('left');
$rightWindow = new Window('right');
$car->attach($leftWindow);
$car->attach($rightWindow);

$car->unlock();
$car->lock();
