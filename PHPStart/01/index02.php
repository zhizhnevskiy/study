<?php
if (isset($_POST["submit"])) {
    echo "Форма отправлена";
    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
    // phpinfo();
    ?>
    <form action="index02.php" method="POST" enctype="multipart/form-data">
        <span>Загрузите фото:</span>
        <input type="file" name="file">
        <input type="submit" value="Отправить" name="submit">
    </form>
</body>

</html>