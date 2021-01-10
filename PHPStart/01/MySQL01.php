<?php

$con =mysqli_connect("127.0.0.1", "root", "root",
 "testsite");
mysqli_set_charset($con, "utf8");

if (mysqli_connect_errno()){
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
     echo "Base connected<br>";
}

// $query = "INSERT INTO news_category VALUES 
// (NULL, 'Категория 100', 'Описание категории', 1,1),
// (NULL, 'Категория 200', 'Описание категории', 1,1),
// (NULL, 'Категория 300', 'Описание категории', 1,1);";";";

// $query = "INSERT INTO news VALUES 
// (NULL,'1','1','1','1','1', CURRENT_TIMESTAMP,'1','1');";

// $query = "DELETE FROM news_category WHERE id>'20'";

// $query = "DELETE FROM news WHERE date <
// DATE_SUB(CURDATE(), INTERVAL 5 MINUTE)";

// $query = "DELETE FROM news ORDER BY date DESC LIMIT 3";

// $query = "UPDATE news SET author_id='2' WHERE id>'10';";

// $query = "UPDATE news SET h1='Новейшая новость'
// WHERE id='7';";

// $query = "SELECT * FROM `news` WHERE author_id ='1';";
// $query = "SELECT * FROM `news` ORDER BY date LIMIT 5;";

// $query = "SELECT * FROM news;";
// $result = mysqli_query($con, $query);

// // var_dump($result);
// // echo mysqli_affected_rows($con) . "<br>";
// $count =  mysqli_num_rows($result);
// echo "<pre>";
// echo $row = mysqli_fetch_array($result);

// if ($count){
//     while($row = mysqli_fetch_array($result)){
//         echo "<h3>";
//         echo $row["h1"];
//         echo "</h3>";
//     }
// }

// $query = "SELECT COUNT(*) FROM `news` WHERE status = '5';";
// $query = "SELECT MAX(id) AS max FROM `news`;";
$query = "SELECT id, h1, short_content FROM news WHERE status = '5';";
$result = mysqli_query($con, $query);

$newslist = '';
while ($news = mysqli_fetch_array($result)){
     $newslist .= "<h1>" . $news["h1"] . "</h1>" .
          "<p>" . $news["short_content"] . "</p>" .
           '<a href="/news/view/' . $news['id'] . ' ">Читать далее</a>'; 
}

echo $newslist;

// echo "<pre>";
// echo $row = mysqli_fetch_array($result);
// echo "</pre>";