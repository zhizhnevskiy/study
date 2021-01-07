<?php
session_start();
$answer1 = $_POST["answer1"];
$_SESSION["answer1"] = $answer1;
?>

<form action="task3.php" method="POST">
    <p>Вопрос 2:</p>
    <span>3 + 3 =</span>
    <input type="text" name="answer2">
    <input type="submit">
</form>