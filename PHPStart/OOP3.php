<?php

class MyCar
{
    const WHEELS = 4;
    public $color;

    public function test()
    {
        echo $this->color;
        echo "<br>";
        echo self::WHEELS;
    }
}

$car1 = new MyCar;
$car1->color = "WHITE";
$car1->test();