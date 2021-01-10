<?php
require_once "classes.php";

$con = mysqli_connect("127.0.0.1", "root", "root", "testsite");
mysqli_set_charset($con, "utf8");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$books = [];
$query = "SELECT * FROM book;";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
    $books[] = new $row['type']($row);
}
echo "<pre>";
var_dump($books);