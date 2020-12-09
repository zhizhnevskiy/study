<?php
// Старт сессии
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Установить переменные сессии
$_SESSION["favcolor"] = "red";
$_SESSION["favanimal"] = "cat";
echo "Переменные сессии установлены.";
?>

</body>
</html>