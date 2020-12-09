<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Мой сайт за час</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<p>Я всё могу, Я всему найчусь</p>
<?php
    echo "Привет Юрка! От PHP!<br/>";
?>
<p>Сегодня <?php echo date("d.m.Y h:i");?></p>
<?php
    echo "<hr>";
    $a = 100; // число - integer, int
    $b = 14.12; // дробь - float
    $c = 'Строка'; // строка - string,str
    $d = array(1,2,3,4,5); // массив - array
    echo 'Test:$a<br>';
    echo "Test:$a<br>";
    echo $b;
    echo "$d[0]<br>" ;
    $family = array(
            'Father' => 'Yury',
            'Mother' => 'Nadya',
            'Son' => array ('Ilya','Egor','Zahar'),
            'big_family' => true
    );
    Echo $family['big_family'];
    echo '<br>';
?>
<?php
    $name='Yura';
    $surname='Zhizhnevskiy';
    echo $name.' '.$surname.'<br>';
    echo "<hr>"
?>
<?php
    $weather = 'снег';
    if($weather == 'снег'){
        echo 'Погода плохая, идёт снег!<br>';}
    else if($weather == 'дождь'){
    echo 'Погода плохая, идёт дождь!<br>';}
    else if($weather == 'ясно'){
    echo 'Погода отличная, на улице солнечно!<br>';}
    else if($weather == 'облачно'){
    echo 'Погода нормальная, на небе облачно!<br>';}
    else {echo 'Недостаточно данных<br>';}
    ?>
<?php
    $name = 'yura';
    $age = 7;
    if ($age>=18 or $name='yura'){
        echo 'Привет Юрий!<br>';
    }
    else {
        echo 'Ты не тот, кто нам нужен';
}
?>
<?php
    for($i=1;$i<=5;$i++){
        echo $i;
        if ($i%2==0){echo ' - Чётное число<br>';}
        else {echo ' - Не чётное число<br>';}
    }
?>
<?php
    $test = 1;
    while($test <=5){
        echo 'Тест '.$test.'<br>';
        $test++;}
?>
<?php
    $family = array('Yura', 'Nadya', 'Ilya', 'Egor', 'Zahar');
    foreach($family as $person){
        echo $person.'<br>';
    }
?>
<?php
    $number = array(1983,1984);
    foreach ($number as $cube){
        echo 'Куб '.$cube.' равен '.($cube*$cube).'<br>';}
?>
<?php
function get_bigger($a, $b){
    if ($a>$b){return $a;}
    else {return $b;}
}
$bigger = get_bigger(8,7);
echo $bigger;
echo'<br>';
?>
<?php
echo max(5,6,7,99,90,);
?>
</body>
</html>
