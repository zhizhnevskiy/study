<?php
date_default_timezone_set( 'Belarus' );
echo 'Время ' . date( 'h:i:sa' ).'<br>';

$d = mktime( 11, 14, 54, 8, 12, 2014 );
echo 'Дата создания ' . date( 'Y-m-d h:i:sa', $d ).'<br>';
?>

<html>
<body>
<br>

<div class = 'menu'>
<?php require 'menu.php';
?>
</div>

<h2>Welcome to my home page!</h2>
<p>Some text.</p>
<p>Some more text.</p>

</body>
</html>

<?php
$myfile = fopen( 'webdictionary.txt', 'r' ) or die( 'Невозможно открыть файл!' );
echo fread( $myfile, filesize( 'webdictionary.txt' ) );
fclose( $myfile );
?>
<br>
<?php
$myfile = fopen( 'testfile.txt', 'w' );
$txt = 'John Doe\n';
fwrite( $myfile, $txt );
$txt = 'Jane Doe\n';
fwrite( $myfile, $txt );
fclose( $myfile );

$myfile = fopen( 'testfile.txt', 'w' ) or die( 'Невозможно открыть файл!' );
$txt = 'Mickey Mouse\n';
fwrite( $myfile, $txt );
$txt = 'Minnie Mouse\n';
fwrite( $myfile, $txt );
fclose( $myfile );
?>

<!DOCTYPE html>
<html>
<body>
<br>
<form action = 'upload.php' method = 'post' enctype = 'multipart/form-data'>
Выберите изображение для загрузки:
<input type = 'file' name = 'fileToUpload' id = 'fileToUpload'>
<input type = 'submit' value = 'Upload Image' name = 'submit'>
</form>

</body>
</html>

<?php
$cookie_name = 'user';
$cookie_value = 'John Doe';
setcookie( $cookie_name, $cookie_value, time() + ( 86400 * 30 ), '/' );
// 86400 = 1 день
?>

<html><body>
<?php
if ( !isset( $_COOKIE[$cookie_name] ) ) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo 'Value is: ' . $_COOKIE[$cookie_name];
}
?>
</body></html>

<html><body>
<?php
if ( count( $_COOKIE ) > 0 ) {
    echo 'Cookie включены.';
} else {
    echo 'Cookie отключены.';
}
?>

</body>
</html>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

$int = 100;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid<br>");
} else {
    echo("Integer is not valid<br>");
}

$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address<br>");
} else {
    echo("$ip is not a valid IP address<br>");
}

$email = "john.doe@example.com";
// Удалить все недопустимые символы из электронной почты
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Проверить e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address<br>");
} else {
    echo("$email is not a valid email address<br>");
}

$url = "https://www.w3schools.com";
// Удалить все недопустимые символы из URL
$url = filter_var($url, FILTER_SANITIZE_URL);
// Проверить url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL<br>");
} else {
    echo("$url is not a valid URL<br>");
}
?>

<?php
$int = 122;
$min = 1;
$max = 200;
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Значение переменной находится вне допустимого диапазона<br>");
} else {
    echo("Значение переменной находится в допустимом диапазоне<br>");
}

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip является действительным IPv6 адресом<br>");
} else {
    echo("$ip является недействительным IPv6 адресом<br>");
}

$url = "https://www.w3schools.com";
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url является действительным URL со строкой запроса<br>");
} else {
    echo("$url является недействительным URL со строкой запроса<br>");
}

$str = "<h1>Hello WorldÆØÅ!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr . "<br>";
?>

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age) . "<br>";

$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars) . "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo "<br>" . $obj->Peter;
echo $obj->Ben;
echo $obj->Joe . "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
