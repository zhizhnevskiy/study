<?php
        /*$speed = "стоп";
        if ($speed>=1 && $speed<=59) {
            echo "Cкорость в пределах нормы: ";
            echo $speed,"км.";}
        else if ($speed>60)
                echo "Вы превышаете скорость! На ", $speed-60, "км.";
        else
            echo "Неверные данные";
?><br>
<?php
        $speed = 31;
        switch($speed)
        {
            case 30:
            case 60:
                echo "Скорость в пределах нормы: ", $speed,"км.";
                break;
            case 70:
                echo "Скорость превышена на: ", $speed-60,"км.";
                break;
            default:
                echo "Хер его знает, что это";
                 break;
        }
?><br>
<?php
        for ($i=0; $i<3; $i++)
            echo "Вывод строки. 3 раза <br>";
        ?>

        <?php
        $counter=6;
        do{echo "Эта строка выведется один раз";
            $counter++;}
            while($counter<5);
?><br>
<?php
        $array=array("Apple","Limon","Chery","Oranges");
        foreach ($array as $value)
        {echo "Вы выбрали фрукт - $value<br>";}
?>
<?php
            echo substr("Hello world!!!",6,3)
?> <br>
<?php
            echo strpos("Hello my world","world");
?> <br>
<?php
        $city[]="Moscow";
        $city[]="Minsk";
            echo $city[1];
?><br>
<?php
        $arr2=["Yura","Nadya","Ilya","Egor","Zahar"];
            echo "I love ",$arr2[1];
?><br>
<?php
        $arr[0] = "PHP";
        $arr[1] = "HTML";
        $arr[2] = "CSS";
        $arr[3] = "YURA";
        $arr[4] = "NADYA";
        unset($arr[2]);
        $arr[1] = "JAVASCRIPT";
        $arr[]  = "JQUERY";
        echo "Now is: ", current($arr),"<br>";
        echo "Next is: ", next($arr),"<br>";
        echo "Previously is: ", prev($arr),"<br>";
        echo "The end is: ", end($arr),"<br>";
        echo "First is: ", reset($arr),"<br>";
        foreach($arr as $key => $value) {
            echo $value . '<br/>';
        }
        echo"<pre>";print_r ($arr);echo"</pre>";
        foreach($arr as $key => $value) {
        echo "[{$key}]=><>{$value}<br/>";
        }
        sort($arr);
        print_r($arr);
        rsort($arr);
        print_r($arr);
        ksort($arr);
        print_r($arr);
        krsort($arr);
        print_r($arr);
?><br>
<?php
        $arr1[0]="PHP";
        $arr1[1]="HTML";
        $arr1[2]="CSS";
        $string=implode(", ",$arr1);
        echo $string;
?><br>
<?php
        $string1="PHP, HTML, CSS";
        $arr3=explode(", ", $string1);
        print_r($arr3);
?><br>
<?php
        $one="PHP";
        $two="HTML";
        $three="CSS";
        $arr=compact("one","two", "three");
        print_r($arr);
?>
<?php
        $arr4["one"] = "PHP";
        $arr4["two"] = "HTML";
        $arr4["three"] = "CSS";
        $new_arr4=array_slice($arr4,0,2);
        print_r($new_arr4);
?>
<?php
        $arr5[1] = "PHP";
        $arr5[2] = "HTML";
        $arr5[3] = "CSS";
        $arr6[1] = "PHP";
        $arr6[2] = "PAINT.NET";
        $arr6[3] = "DREAMWEAVER";
        $new_arr5=array_merge($arr5,$arr6);
        print_r($new_arr5);
        $diff3=array_intersect($arr5,$arr6);
        print_r($diff3);
?><br>
<?php
        $arr9["one"] = "PHP";
        $arr9["two"] = "HTML";
        $arr9["three"] = "CSS";
        $arr10[1] = "PHP";
        $arr10["two"] = "PAINT.NET";
        $arr10[3] = "DREAMWEAVER";
        $diff=array_diff($arr9,$arr10);
        print_r($diff);
        $diff2=array_diff_assoc($arr9,$arr10);
        print_r($diff2);
?>
<?php
        $arr[1]=31;
        $arr[2]=1;
        $arr[3]=94;
        $sum=array_sum($arr);
        echo $sum;
?><br>
<?php
        $arr=array(30,44,97,30);
        print_r($arr);
        $new_arr=array_unique($arr);
        print_r($new_arr);
?>
<?php
        $companies["Microsoft"][1] = "Programmer";
        $companies["Microsoft"][2] = "PR";
        $companies["Microsoft"][3] = "Office Manager";

        $companies["Google"][1] = "IT";
        $companies["Google"][2] = "Web-design";

        $companies["Mozilla"][1] = "PR";
        $companies["Mozilla"][2] = "C++ Programmer";

        print_r($companies);
?>
<?php
        $companies=[
                "Microsoft"=>["Programmer", "PR", "Office Manager"],
                "Coogle"=>["IT", "Web-design"],
                "Mozilla"=>["PR", "C++ Programmer"]
        ];
        echo"<pre>";
        print_r($companies);
        echo"<pre>";
?>
<?php
        $companies[0][] = "Programmer";
        $companies[0][] = "PR";

        $companies[1][] = "IT";
        $companies[1][] = "Web-design";

        $companies[2][] = "PR";
        $companies[2][] = "C++ Programmer";

        for($i=0; $i<count($companies);$i++) {
            for ($j = 0; $j < count($companies[$i]); $j++) {
                echo $companies[$i][$j],"<br/>";
         }
        }
?>
<?php
        function s2($number)
        {
            $s2 = $number*$number;
            echo $s2;
        }
        s2(8);
?>
<?php
        function matem($x,$y){
            $enter = cos($x) + sin($y) +2;
            return $enter;
        }
        $x=5;
        $y=7;
        $z=matem($x,$y);
        echo $z;
?>
<?php
        function hello($text="Не было запросов"){
            echo $text;
        }
        hello();
        echo"<br/>";
        hello("Запрос был");
?>
<?php
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $name = clean($name);
    $surname = clean($surname);
    $email = clean($email);
    $message = clean($message);

    if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {
        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);

        if(check_length($name, 2, 25)
            && check_length($surname, 2, 50)
            && check_length($message, 2, 1000)
            && $email_validate) {
            echo "Спасибо за сообщение";
        } else {
            echo "Введенные данные некорректные";
        }
    } else {
        echo "Заполните пустые поля";
    }
}

?>
<?php
class FirstClass
{
    function __construct($hello = "hi") {
        return $hello;
    }
}
$instance = new FirstClass();
$instance = new FirstClass("hello");
*/
?>
<?php
    $who = "dragon's" . 'mother';
    print_r($who."<br>");
$str = <<<EOT
Пример строки,
охватывающей несколько строк,
с использованием heredoc-синтаксиса.
Здесь не нужно экранировать ни одинарные ' ни двойные " кавычки.
EOT;
print_r($str);

?>