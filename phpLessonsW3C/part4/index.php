<?php
//test №1

class Fruit {
    public $name;
    public $color;

    function set_name( $name ) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_color( $color ) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name( 'Apple' );
$apple->set_color( 'Red' );
$apple->name = 'Apple too';

$banana = new Fruit();
$banana->set_name( 'Banana' );
$banana->set_color( 'Yellow' );

echo 'Name: ' . $apple->get_name() . '. Color: ' . $apple->get_color();
echo '<br>';
var_dump( $apple instanceof Fruit );
echo '<br>';
echo 'Name: ' . $banana->get_name() . '. Color: ' . $banana->get_color();
echo '<br>';
var_dump( $banana instanceof Fruit );
echo '<br>';
echo '<br>';

//test №2

class Cars {
    public $mark;
    public $color;
    public $year;
    protected $price;
    private $master;

    public function __construct( $mark, $color, $year ) {
        $this->mark = $mark;
        $this->color = $color;
        $this->year = $year;
    }
    protected function intro() {
        echo "This echo in class Cars function intro with {$this->mark}, {$this->color}, {$this->year}.<br>";
    }

    public function get_mark() {
        return $this->mark;
    }

    public function get_color() {
        return $this->color;
    }

    public function get_year() {
        return $this->year;
    }

    // public function __destruct() {
    //     echo "This echo in class Cars with {$this->mark}, {$this->color}, {$this->year}.<br>";
    // }
}

class fabric extends Cars {
    public function message() {
        echo 'This messages from class fabric<br>';
        $this->intro();
    }
}

$audi = new Cars( 'A8', 'white', '2020' );
echo 'I have car Audi-' . $audi->get_mark() . '. Hi is build in ' .
$audi->get_year() . '. And his color is ' . $audi->get_color() . '.<br>';
// $audi->price = "15000$";
// $audi->master = 'Yura';

$bmw = new fabric( 'BMW', 'Black', '2019' );
$bmw->message();
echo '<br>';

//test №3

class Fruit2 {
    public $name;
    public $color;

    public function __construct( $name, $color ) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit2 {
    public $weight;

    public function __construct( $name, $color, $weight ) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro() {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.<br>";
    }
}

$strawberry = new Strawberry( 'Strawberry', 'red', 50 );
$strawberry->intro();
echo '<br>';

//test №4

class Goodbye1 {
    const LEAVING_MESSAGE = 'Спасибо за посещение W3Schools! 1';
}
echo Goodbye1::LEAVING_MESSAGE . '<br>';

class Goodbye2 {
    const LEAVING_MESSAGE = 'Спасибо за посещение W3Schools! 2';

    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}
$goodbye = new Goodbye2();
$goodbye->byebye();
echo '<br>';

//test №5

abstract class Bulding {
    public $name;

    public function __construct( $name ) {
        $this->name = $name;
    }
    abstract public function intro() : string;

    public function print() {
        echo 'i print<br>';
    }
}

class ferm extends Bulding {
    public function intro(): string {
        return "This class $this->name!<br>";
    }
}

class theater extends Bulding {
    public function intro(): string {
        return "This class $this->name!<br>";
    }
}

class magazin extends Bulding {
    public function intro(): string {
        return "This class $this->name!<br>";
    }
}
echo '<br>';

$ferm = new ferm( 'FERM' );
echo $ferm->intro();
echo $ferm->print();

$theater = new theater( 'THEATER' );
echo $theater->intro();

$magazin = new magazin( 'MAGAZIN' );
echo $magazin->intro();
echo '<br>';

//test №6

abstract class Parents {
    abstract protected function prefixName( $name );
}

class Child extends Parents {
    public function prefixName( $name ) {
        if ( $name === 'John Doe' ) {
            $prefix = 'Mr. ';
        } elseif ( $name === 'Jane Doe' ) {
            $prefix = 'Mrs. ';
        } else {
            $prefix = '';
        }
        return "{$prefix}{$name}";
    }
}

$people = new Child;
echo $people->prefixName( 'John Doe' );
echo '<br>';
echo $people->prefixName( 'Jane Doe' );
echo '<br>';

//test №7

abstract class myParents {
    abstract protected function hisName( $name );
}

class myChild extends myParents {
    public function hisName( $name, $separator = '- ', $greet = 'Dear' ) {
        if ( $name === 'John Doe' ) {
            $prefix = 'My Dad ';
        } elseif ( $name === 'Jane Doe' ) {
            $prefix = 'My Mam ';
        } else {
            $prefix = '';
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}
echo '<br>';
$people = new myChild;
echo $people->hisName( 'John Doe' );
echo '<br>';
echo $people->hisName( 'Jane Doe' );
echo '<br>';
echo '<br>';

//test №8

trait functionForAll1 {
    public function forAll1() {
        echo 'This echo from trait functionForAll1';
    }
}
trait functionForAll2 {
    public function forAll2() {
        echo 'This echo from trait functionForAll2';
    }
}

class someClass1 {
    use functionForAll1;
}

class someClass2 {
    use functionForAll1, functionForAll2;
}

$object1 = new someClass1();
$object1->forAll1();
echo '<br>';

$object2 = new someclass2();
$object2->forAll1();
echo '<br>';
$object2->forAll2();
echo '<br>';

//test №9

class staticTest1 {
    public static function welcome() {
        echo 'Hello from static function welcome';
    }
    protected static function getWebsiteName() {
        return 'zhizhnevskiy.com';
    }
    public function __construct() {
        self::welcome();
    }
}

class someClass3 extends staticTest1 {
    public $websiteName;

    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
}
echo '<br>';
staticTest1::welcome();
echo '<br>';
new staticTest1();
echo '<br>';
$domain = new someClass3();
echo $domain->websiteName;
echo '<br>';

//test №10

class staticTest2{
    public static $test1 = "Test 1";
    public function staticTest2(){
        return self::$test1;
    }
}
class someClass4 extends staticTest2{
    public function forSomeClass4(){
        return parent::$test1;
    }
}
echo '<br>';
echo staticTest2::$test1;
echo '<br>';
$static = new staticTest2;
echo $static->staticTest2();
echo '<br>';
echo someClass4::$test1;
echo '<br>';
$static2 = new someClass4;
echo $static2->forSomeClass4();
