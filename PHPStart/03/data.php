<?php

require_once "classes.php";

$publications = [];

// $news1 = new NewsPublication;
// $news2 = new NewsPublication;
// $news3 = new NewsPublication;
// $articles1 = new ArticlePublication;
// $articles2 = new ArticlePublication;
// $photo1 = new PhotoReportPublication;
// $photo2 = new PhotoReportPublication;
// $photo3 = new PhotoReportPublication;

// $publication = [$news1, $news2, $articles1, $photo1];

$con = mysqli_connect("127.0.0.1", "root", "root", "testsite");
mysqli_set_charset($con, "utf8");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM publication");

while ($row = mysqli_fetch_array($result)) {
    $publications[] = new $row["type"]($row);
}

