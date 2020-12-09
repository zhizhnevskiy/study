<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y, $z;
    $z = $x + $y;
}

myTest();
echo $z.'<br>';

function myTest1() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest1();
echo $y.'<br>';

function myTest3() {
    static $d = 0;
    echo $d.'<br>';
    $d++;
}

myTest3();
myTest3();
myTest3();

$txt1 = 'Выучить PHP';
$txt2 = 'W3Schools';
$x = 5;
$y = 4;
echo '<h2>' . $txt1 . '</h2>';
echo 'Выучить PHP на ' . $txt2 . '<br>';
echo $x + $y.'<br>';

$x = 5985;
var_dump( $x );

$w = 10.365;
var_dump( $w );

$cars = array( 'Volvo', 'BMW', 'Toyota' );
var_dump( $cars );
echo '<br>';

class myCar {
    function Car() {
        $this->model = 'VW';
        echo 'Вау';
    }
}
// создать объект
$herbie = new myCar();
// показать свойства объекта
echo $herbie->model;

$x = 'Hello world!';
$x = null;
var_dump( $x );
echo '<br>';

$x = 5985;
var_dump( is_int( $x ) );

$x = 59.85;
var_dump( is_int( $x ) );

$x = 1.9e411;
var_dump( $x );
echo '<br>';

$x = 23465.768;
$int_cast = ( int )$x;
echo $int_cast.'<br>';

// Привести string к int
$x = '23465.768';
$int_cast = ( int )$x;
echo $int_cast.'<br>';

define( 'GREETING', 'Welcome to W3Schools.com!' );

function myTest4() {
    echo GREETING.'<br>';
}
myTest4();

$t = date( 'H' );
if ( $t < '10' ) {
    echo 'Have a good morning!<br>';
} elseif ( $t < '20' ) {
    echo 'Have a good day!<br>';
} else {
    echo 'Have a good night!<br>';
}

$favcolor = 'red';
switch ( $favcolor ) {
    case 'red':
    echo 'Ваш любимый цвет красный!<br>';
    break;
    case 'blue':
    echo 'Ваш любимый цвет синий!<br>';
    break;
    case 'green':
    echo 'Ваш любимый цвет зеленый!<br>';
    break;
    default:
    echo 'Ваш любимый цвет - ни красный, ни синий, ни зеленый!<br>';
}

$x = 0;
while( $x < 20 ) {
    echo "Число: $x ";
    $x += 10;
}
echo "<br>";

$x = 1;
do {
    echo "Число: $x ";
    $x++;
}
while ( $x < 3 );
echo "<br>";

$x = 6;
do {
    echo "Число: $x <br>";
    $x++;
}
while ( $x <= 5 );

for ( $x = 0; $x < 20; $x += 10 ) {
    echo "Число: $x ";
}
echo "<br>";

$age = array( 'Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43' );
foreach ( $age as $x => $val ) {
    echo " $x = $val ";
}
echo "<br>";

function familyName( $fname, $year ) {
    echo "$fname Refsnes. Born in $year ";
}
familyName( 'Hege', '1975' );
familyName( 'Stale', '1978' );
familyName( 'Kai Jim', '1983' );
echo "<br>";

function addNumbers( int $a, int $b ) {
    return $a + $b;
}
echo addNumbers( 5, '5 days' );
echo '<br>';

function sum( int $x, int $y ) {
    $z = $x + $y;
    return $z;
}
echo '5 + 10 = ' . sum( 5, 10 )." ";
echo '7 + 13 = ' . sum( 7, 13 )." ";
echo '2 + 4 = ' . sum( 2, 4 )." ";
echo '<br>';

function addNumbers2( float $a, float $b ) : int {
    return ( int )( $a + $b );
}
echo addNumbers2( 1.2, 5.2 );
echo '<br>';

$cars = array( 'Volvo', 'BMW', 'Toyota' );
echo 'I like ' . $cars[0] . ', ' . $cars[1] . ' and ' . $cars[2] . '.<br>';
echo count($cars);
echo '<br>';

$age = array( 'Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43' );
echo 'Peter is ' . $age['Peter'] . ' years old.<br>';

foreach ( $age as $x => $x_value ) {
    echo 'Key = ' . $x . ', Value = ' . $x_value;
    echo '<br>';
}

$cars = array
(
    array( 'Volvo', 22, 18 ),
    array( 'BMW', 15, 13 ),
    array( 'Saab', 5, 2 ),
    array( 'Land Rover', 17, 15 )
);
echo $cars[0][0].': In stock: '.$cars[0][1].', sold: '.$cars[0][2].'.<br>';
echo $cars[1][0].': In stock: '.$cars[1][1].', sold: '.$cars[1][2].'.<br>';
echo $cars[2][0].': In stock: '.$cars[2][1].', sold: '.$cars[2][2].'.<br>';
echo $cars[3][0].': In stock: '.$cars[3][1].', sold: '.$cars[3][2].'.<br>';

for ($row = 0; $row < 2; $row++) {
    echo "<b>Row number $row</b>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
foreach ( $cars as $x => $x_value ) {
    echo 'Key = ' . $x . ', Value = ' . $x_value;
    echo '<br>';
}

$numbers = array(4, 6, 2);
rsort($numbers);
foreach ( $numbers as $x => $x_value ) {
    echo 'Key = ' . $x . ', Value = ' . $x_value;
    echo '<br>';
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
foreach ( $age as $x => $x_value ) {
    echo 'Key = ' . $x . ', Value = ' . $x_value;
    echo '<br>';
}

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>

<html><body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty<br>";
    } else {
        echo $name;
    }
}
?>
</body></html>

<html><body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty<br>";
    } else {
        echo $name;
    }
}
?>
</body></html>

<html><body>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body></html>