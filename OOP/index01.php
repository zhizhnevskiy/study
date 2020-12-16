<?php
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

    public function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    public function getInfo()
    {
        return "{$this->name} " . "{$this->password} " . "{$this->email} "
            . "{$this->city} ";
    }
}

$user1 = new UserConstruct("Yura", "123", "zhizhnevskiy@yandex.ru", "Vitebsk");
echo $user1->getInfo();
