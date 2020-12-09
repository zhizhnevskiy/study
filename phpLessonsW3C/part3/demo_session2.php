<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo переменных сессии, которые были установлены на предыдущей странице
$_SESSION["favcolor"] = "yellow";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
print_r($_SESSION);
?>

</body>
</html>