<?php

class base
{
    public $a = 'a public';
    protected $b = 'b protected';
    private $c = 'c private';

    function printProperties()
    {
        echo $this->a . "<br>";
        echo $this->b . "<br>";
        echo $this->c . "<br>";
    }
}

class Inherited extends base
{
    function printProperties()
    {
        echo $this->a . "<br>";
        echo $this->b . "<br>";
        echo $this->c . "<br>";
    }
}

$obj = new base;
$obj2 = new Inherited;

echo  $obj2->a . "<br>";
// echo  $obj->b . "<br>";
// echo  $obj->c . "<br>";
$obj->printProperties();
$obj2->printProperties();
