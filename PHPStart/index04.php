<?php
if (isset($_COOKIE["name"])){
    $name = $_COOKIE["name"];
} else {
    $name = "Гость";
}
$str = $_COOKIE["arr"];
$array = unserialize($str);
print_r($array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index04.php</title>
</head>
<body>
    <h1>Страница index04.php</h1>
    <p>Привет и тут, <?php echo $name; ?></p>
    <a href="index03.php">Cтраница index03.php</a>
       </body>
</html>