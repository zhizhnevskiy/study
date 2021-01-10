<?php

if (isset($_POST["name"]) && (!empty($_POST["name"]))) {
    $name = $_POST["name"];
    setcookie("name", $name,);
} elseif (isset($_COOKIE["name"])) {
    $name = $_COOKIE["name"];
} else {
    $name = "Гость";
}
$arr = [
    'name' => "Юра",
    'surname' => "Жижневский",
    'city' => "Витебск",
];
$result = serialize($arr);
setcookie('arr', $result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index03.php</title>
</head>

<body>
    <h1>Страница index03.php</h1>
    <a href="index04.php">Cтраница index04.php</a>
    <br><br>
    <p>Привет, <?php echo $name; ?></p>
    <form method="POST">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>

</html>