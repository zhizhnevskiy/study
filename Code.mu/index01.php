<?php

class User
{
    public $name;
    public $age;

    public function show($str)
    {
        return $str . " " . $this->name . "!!!";
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function addAge($years)
    {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
    public function subAge($years)
    {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
    private function isAgeCorrect($age)
    {
        return $age >= 18 && $age <= 60;
    }
}

$user1 = new User;
$user1->name = "Yura";
$user1->age = 36;

$user2 = new User;
$user2->name = "Nadya";
$user2->age = 37;
$user2->setName("Ilya");
$user2->setAge(10);
$user2->addAge(10);
$user2->subAge(5);



echo $user1->age + $user1->age;
echo "<br>";
echo $user1->show("Hello");
echo "<br>";
echo $user2->name;
echo "<br>";
echo $user2->age;
echo "<br><br>";



class Employee
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function salary()
    {
        return $this->salary;
    }
    public function checkAge()
    {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
    public function doubleSalary()
    {
        return $this->salary * 2;
    }
}

$man1 = new Employee;
$man1->name = "Victor";
$man1->age = 19;
$man1->salary = 1500;

$man2 = new Employee;
$man2->name = "Vasiliy";
$man2->age = 35;
$man2->salary = 2500;

echo $man1->salary + $man2->salary;
echo "<br>";
var_dump($man1->checkAge());
echo "<br><br>";

class myRectangle
{
    public $width;
    public $height;

    public function getSquare()
    {
        return $this->width * $this->height;
    }
    public function getPerimetr()
    {
        return ($this->width + $this->height) * 2;
    }
}
$myRectangle = new myRectangle;
$myRectangle->width = 20;
$myRectangle->height = 10;
echo $myRectangle->getSquare();
echo "<br>";
echo $myRectangle->getPerimetr();
echo "<br><br>";

class myStudent
{
    public $name;
    public $course;

    public function transferToNextCourse()
    {
        $newCourse = $this->course + 1;
        if ($this->isCourseCorrect($newCourse)) {
            $this->course = $newCourse;
        }
    }

    private function isCourseCorrect($up)
    {
        return $up >= 1 && $up <= 5;
    }
}

$student = new myStudent;
$student->name = "Ilya";
$student->course = 4;
$student->transferToNextCourse();
echo $student->course;