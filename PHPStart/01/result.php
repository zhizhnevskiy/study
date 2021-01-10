<?php
session_start();

$answer1 = $_SESSION["answer1"];
$answer2 = $_SESSION["answer2"];
$answer3 = $_POST["answer3"];

echo "Вы правильно ответили:<br>";

if ($answer1 == 4){
    echo "- на первый вопрос<br>";
} else {
    echo "";
}
if ($answer2 == 6){
    echo "- на второй вопрос<br>";
} else {
    echo "";
}
if ($answer3 == 8){
    echo "- на третий вопрос<br>";
} else {
    echo "";
}

echo session_id();

