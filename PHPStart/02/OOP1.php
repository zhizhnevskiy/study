<?php
class MyCar
{
    public $color = "White";
    public $speed;
    public $fuel;
    public $brand;

    public function __construct()
    {
        echo "New object of class " . __CLASS__ .
        " created.<br>";
        echo "Method " . __METHOD__ . " called.<br>";
    }

    public function __destruct()
    {
        echo "Method " . __METHOD__ . " called<br>";
        echo "object deleted<br>";
    }

    public function test(){
        echo '<br>test my function<br>';
    }

    public function tripTime($distance){
        $time = $distance / $this->speed;
        return $time;
    }
}

$car1 = new MyCar;
$car1->speed = 120;
$car1->fuel = 11;
$car1->brand = "AUDI";

$car2 = new MyCar;
$car2->speed = 140;
$car2->fuel = 13;
$car2->brand = "MERCEDES";
$car2->color = "Black";

print_r($car1);
echo "<br>";
print_r($car2);
echo "<br>";

echo $car1->brand;

$car1->test();

echo "Car 1 time = " . $car1->tripTime(1000) . ".<br>";
echo "Car 2 time = " . $car2->tripTime(1000) . ".<br>";


