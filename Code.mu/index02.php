<?php

use Fixtures\Prophecy\EmptyClass;

class myUser
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$user = new myUser("Yura", 36);
echo $user->age;

class Employee
{
    private $name;
    private $age;
    private $salary;

    // public function __construct($name, $age, $salary)
    // {
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->salary = $salary;
    // }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    }

    public function getSalary()
    {
        $newSalary = $this->salary;
        return $newSalary . "$";
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    private function isAgeCorrect($age){
        return $age >= 1 and $age <= 100;
    }
}

// $man1 = new Employee("Vasiliy", 35, 1000);
// $man2 = new Employee("Peter", 36, 1200);
// var_dump($man1);
// echo "<br>";
$man = new Employee;
$man->setSalary(1000);
echo $man->getSalary();