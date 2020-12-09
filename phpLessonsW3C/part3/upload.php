<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Проверьте, является ли файл изображения фактическим изображением или поддельным изображением
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Файл является изображением - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Файл не является изображением.";
        $uploadOk = 0;
    }
}
// Проверить, существует ли файл
if (file_exists($target_file)) {
    echo "Извините, файл уже существует.";
    $uploadOk = 0;
}
// Проверить размер файла
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Извините, ваш файл слишком большой.";
    $uploadOk = 0;
}
// Разрешить определенные форматы файлов
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Извините, только JPG, JPEG, PNG & GIF файлы разрешены.";
    $uploadOk = 0;
}
// Проверить, не установлен ли $uploadOk в 0 по ошибке
if ($uploadOk == 0) {
    echo "Извините, ваш файл не был загружен.";
// если все в порядке, попробуйте загрузить файл
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Файл ". basename( $_FILES["fileToUpload"]["name"]). " был загружен.";
    } else {
        echo "Извините, при загрузке файла произошла ошибка.";
    }
}
?>