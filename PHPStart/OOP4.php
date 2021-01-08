<?php

class MyCar
{
    public $brand;
    public $color;
    public $speed = 200;
    const DOORS = 2;
    const WINDOWS = 8;
    const WHEELS = 4;

    public function __construct($brand = "Auto", $color = "Color", $speed = 0)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
    }

    public function fuelConsumption($distance)
    {
        $fuel = $distance / 100;
        return $fuel;
    }

    public static function getMaxConstant()
    {
        echo max(self::DOORS, self::WINDOWS, self::WHEELS);
    }
}

$car1 = new MyCar;
$car1->brand = "BMW";
$car1->color = "black";
$car1->speed = "250";

$car2 = new MyCar;
$car2->brand = "AUDI";
$car2->color = "WHITE";
$car2->speed = "280";

$car3 = new MyCar("MERCEDES", "RED", 300);
$car4 = new MyCar("VW", "brown", 180);

echo MyCar::DOORS . "<br>";
echo MyCar::WINDOWS . "<br>";
echo MyCar::WHEELS . "<br>";

echo $car1->fuelConsumption(1000);
MyCar::getMaxConstant();

echo "<pre>";
print_r($car1);
echo "<br>";
print_r($car2);
echo "<br>";
print_r($car3);
echo "<br>";
print_r($car4);
echo "<br>";