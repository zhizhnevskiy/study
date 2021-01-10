<?php

class Vehicle
{
    public $color;
    public $speed;
    public $brand;

    public function tripTime($distance)
    {
        $time = $distance / $this->speed;
        return $time;
    }
}

class MyCar extends Vehicle
{
    public $fuel;

    public function fuelConsumption($distance)
    {
        $result = ($this->fuel * $distance) / 100;
        return $result;
    }
}

class Bicycle extends Vehicle
{
    public $type;
    const CALORIES_PER_HOUR = 500;

    public function caloriesBurned($distance)
    {
        $time = $this->tripTime($distance);
        $calories = $time * self::CALORIES_PER_HOUR;
        return $calories;
    }
    public function tripTime($distance)
    {
        // $time = ($distance / $this->speed) * 1.2;
        return parent::tripTime($distance) * 1.2;
    }
}

$car1 = new MyCar;
$car1->speed = 110;
$car1->fuel = 12;

$car2 = new MyCar;
$car2->speed = 130;
$car2->fuel = 14;

$bicycle = new Bicycle;
$bicycle->speed = 20;

$distance = 100;
echo "Car1 time: " . $car1->tripTime($distance) . "<br>";
echo "Car2 time: " . $car2->tripTime($distance) . "<br>";
echo "bicycle time: " . $bicycle->tripTime($distance) . "<br>";

echo "<br>";

echo "Car1 fuel consumption: " . $car1->fuelConsumption($distance) . "<br>";
echo "Car2 fuel consumption: " . $car2->fuelConsumption($distance) . "<br>";
echo "Bicycle calories burned: " . $bicycle->caloriesBurned($distance) . "<br>";

