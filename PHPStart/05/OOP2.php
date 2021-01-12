<?php

interface Vehicle
{
    public function info();
}

interface Car extends Vehicle
{
    public function drive();
}

interface Boat extends Vehicle
{
    public function swim();
}

class Audi implements Car
{
    public function info()
    {
        echo "Audi is a German<br>";
    }
    public function drive()
    {
        echo "Audi drives<br>";
    }
}

$audi = new Audi;
$audi->info();
$audi->drive();

class MercedesAmphibious implements Car, Boat
{
    public function info()
    {
        echo "Mercedes is a German<br>";
    }
    public function drive()
    {
        echo "Mercedes drives<br>";
    }
    public function swim()
    {
        echo "Mercedes swims<br>";
    }
}

$mercedesAmphibious = new MercedesAmphibious;
$mercedesAmphibious->info();
$mercedesAmphibious->drive();
$mercedesAmphibious->swim();
