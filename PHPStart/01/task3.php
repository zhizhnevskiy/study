<?php
session_start();
$answer2 = $_POST["answer2"];
$_SESSION["answer2"] = $answer2;
?>

<form action="result.php" method="POST">
    <p>Вопрос 3:</p>
    <span>4 + 4 =</span>
    <input type="text" name="answer3">
    <input type="submit">
</form>