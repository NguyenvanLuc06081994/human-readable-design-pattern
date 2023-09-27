<?php

interface Door
{
    public function getDescription();
}

class WoodenDoor implements Door
{
    public function getDescription(): void
    {
        echo 'Wooden Door';
    }
}

class IronDoor implements Door
{
    public function getDescription(): void
    {
        echo 'Iron Door';
    }
}

interface DoorFittingExpert
{
    public function getDescription();
}

class Welder implements DoorFittingExpert
{
    public function getDescription(): void
    {
        echo 'Fit only iron doors';
    }
}

class Carpenter implements DoorFittingExpert
{
    public function getDescription(): void
    {
        echo 'Fit only wooden doors';
    }
}

interface DoorFactory
{
    public function makeDoor(): Door;

    public function makeFittingExpert(): DoorFittingExpert;
}

class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}

class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription();  // Output: Wooden Door
$expert->getDescription(); // Output: Fit only wooden doors

// Same for Iron Factory
$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();  // Output: Iron Door
$expert->getDescription(); // Output: Fit only iron doors


