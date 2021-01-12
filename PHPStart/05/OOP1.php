<?php
class Student
{
    public $name;
    public $result;

    function __construct($name, array $result)
    {
        echo "Student " . $name . ":<br>";
        foreach ($result as $subject => $item) {
            echo $subject . ": " . $item .  "<br>";
        }
        echo "<hr>";
    }
}

$student1 = new Student("John", ["math" => 3, "biology" => 4]);
$student1 = new Student("Marry", ["math" => 4, "biology" => 5]);
// $student3 = new Student("Max", 2);

// function onErrorFunction(){
//     echo "Enter correct value";
// }
// set_error_handler("onErrorFunction");

class User
{
    public $firstname;
    public $lastname;
}

function getFullName(User $user)
{
    return $user->firstname . " " . $user->lastname . "<br>";
}

$user1 = new User;
$user1->firstname = "Alex";
$user1->lastname = "Jones";
echo getFullName($user1);
// echo getFullName("String");

class SuperUser extends User
{
}

$user2 = new SuperUser;
$user2->firstname = "Jack";
$user2->lastname = "Sparrow";
echo getFullName($user2);


abstract class Human
{
    abstract public function printHello($name);

    public function printHelloName($name){
        echo "Hello, $name<br>  ";
    }
}

class Student2 extends Human
{
    public function printHello($name)
    {
        echo "Привет $name<br>";
    }
}

$student2 = new Student2;
$student2->printHello("Юра");
$student2->printHelloName("Yuriy");

