<?php
class MyCar
{
    public $brand;
    public $color = "White";
    public $speed;
    public $fuel;
    const WHEELS = 4;

    public function __construct($brand, $color, $speed, $fuel)
    {
       $this->brand = $brand;
       $this->color = $color;
       $this->speed = $speed;
       $this->fuel = $fuel;
    }

    public function tripTime($distance){
        $time = $distance / $this->speed;
        return $time;
    }

    public function test(){
        echo MyCar::WHEELS . "<br>";
        echo self::WHEELS . "<br>";
    }
}

class MyBicycle{
    const WHEELS =2;
    public function test(){
        echo MyCar::WHEELS . "<br>";
        echo self::WHEELS . "<br>";
    }
}

$car1 = new MyCar("AUDI", "RED", 120, 11);
$car3 = new MyCar("BMW", "BLACK", 200, 14);
$cycle = new MyBicycle;

echo "Car 1 time = " . $car1->tripTime(1000) . ".<br>";
echo "Car 3 time = " . $car3->tripTime(1000) . ".<br>";
$car1->test();
$cycle->test();



