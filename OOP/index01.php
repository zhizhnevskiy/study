<?php
namespace Home;

use Exception;

class User
{
    public $name = "user";
    public $password = "password";
    public $email = "email";
    public $city = "city";

    public function Hello()
    {
        echo "Hello {$this->name} ";
    }

    public function getInfo()
    {
        echo "{$this->name}<br>";
    }
}

$admin = new User();
$admin->name = "Admin";
$admin->surname = "Admin";
$admin->Hello();
$admin->getInfo();

$user = new User();
$user->name = "Yura ";
$user->surname = "Zhizhnevskiy";
$user->Hello();
echo $user->surname . "<br>";


class UserConstruct
{
    public $name;
    public $password;
    public $email;
    public $city;

    private static $surname;
    public static function setSurname($surname1)
    {
        self::$surname = $surname1;
    }
    public static function getSurname()
    {
        return "Hello " . self::$surname;
    }

    public function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    public function getInfo()
    {
        $information = "{$this->name} " . "{$this->password} " . "{$this->email} "
            . "{$this->city} <br>";
        return $information;
    }
    public function getName()
    {
        echo $this->test();
    }
    public function test()
    {
        echo "Test<br>";
    }
}


$user1 = new UserConstruct("Yura", "123", "zhizhnevskiy@yandex.ru", "Vitebsk");
echo $user1->getInfo();
$user1->getName();

UserConstruct::setSurname("Popov<br>");
echo UserConstruct::getSurname();

class Moderator extends UserConstruct {
    protected $info;
    public $rights;

    function __construct($name, $password, $email, $city, $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);
        $this->info = $info;
        $this->rights = $rights;
    }
    function getInfo(){
        $information = parent::getInfo();
        $information .= "{$this->info} " . "{$this->rights} ";
        return $information;
    }

    function hello(){
        echo "Moderator is here!<br>";
    }
}
$moder = new Moderator("Stepa", "456", "stepa@yandex.ru", "Minsk",
"Moderator", "true<br>");
echo $moder->hello();
echo $moder->getInfo();

class Test extends Moderator{
    const SOME_YEAR = 1984;
    public function test2(){
        $this->info = "information<br>";
        echo $this->info;
    }
}
$test = new Test("Stepa", "456", "stepa@yandex.ru", "Minsk",
"Moderator", "true"); 
$test->test2();
echo Test::SOME_YEAR . "<br>";

abstract class NewUser {
    public $name;
    public $status;

    abstract public function getStatus();
}
 class Admin extends NewUser{
     public function getStatus()
     {
         echo "Admin<br>";
     }
 }
$user2 = new Admin;
$user2->getStatus();

interface FirstInterface{
    public function getName();
}
interface SecondInterface{
    public function getStatus();
}
interface ThirdInterface extends FirstInterface, SecondInterface{
}
class Test2 implements FirstInterface, SecondInterface{
    public $name = "Yura";
    public $status = "Admin";

    public function getName()
    {
        echo $this->name  . "<br>";
    }

    public function getStatus()
    {
        echo $this->status  . "<br>";
    }
}
$test2 = new Test2;
$test2->getName();
$test2->getStatus();

trait Hello{
    public function sayHello(){
        echo "Hello ";
    }
}
trait World{
    public function sayWorld(){
        echo "World<br>";
    }
}
class myHelloWorld{
    use Hello, World;
}
$obj = new myHelloWorld();
$obj->sayHello();
$obj->sayWorld();

class getClone {
    private $name;
    private $city;
    private $id;

    function __construct ($name, $city){
        $this->name = $name;
        $this->city = $city;
    }
    function setId($id){
        $this->id = $id;
    }
    public function __clone(){
        $this->id = 0;
    }
}
$obj2 = new getClone("Yura", "Vitebsk");
// $obg2->setId(777);
$obj3 = clone $obj2;
var_dump($obj2); 
var_dump($obj3);
echo "<br>";

class GetSet {
    private $number =1;

    public function __get($name){
        echo "You get {$name}";
    }

    public function __set($name, $val){
        echo "You set {$name} to ";
    }
}
$obj4 = new GetSet();
echo $obj4->number . "<br>";
echo $obj4->number = 777 . "<br>";

$file = "namespace.php"; 
try{
    if (!file_exists($file)){
        throw new Exception('File not found');
    }
} catch (Exception $e){
    echo $e->getMessage();
}