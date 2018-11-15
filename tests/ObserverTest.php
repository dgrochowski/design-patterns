<?php

namespace Tests;

use Behavioral\Observer\Car;
use Behavioral\Observer\Door;
use Behavioral\Observer\Window;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testCar()
    {
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
        $this->assertTrue($car->isLocked());

        $leftWindow = new Window('left');
        $rightWindow = new Window('right');
        $car->attach($leftWindow);
        $car->attach($rightWindow);

        $car->unlock();
        $this->assertFalse($car->isLocked());

        $car->lock();
        $this->assertTrue($car->isLocked());

        echo "\n";
    }
}
