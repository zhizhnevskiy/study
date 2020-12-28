<?php
// for ($i = 10; $i >= 1; $i--) {
//     $arr[] = "Кнопка $i";
// }
// echo "<ul>";
// foreach($arr as $element) {
//     echo "<li><a href=\"#\">$element</li>";
// }
// echo "</ul>";  

function myName($name, $surname){
    echo "<h2>Привет, $name $surname!</h2>";
} 
myName("Юрий", "Жижневский");

$array = [
    "Автотехника" => [ // 1
        "Вело"=> [ // 2
            "Велосипеды" => [ // 3
                "(товар) Extreme" => 10, //4
                "(товар) Author" => 4 // 4
            ],
             "Самокаты" => 12 // 3
        ],
        "Авто" => [ // 2
            "Opel" =>[ // 3
                "(товар) Vivaro" => 5 // 4
            ],
            "(товар) Honda" => 10, // 3
            "(товар) Audi" => 11 // 3
        ],
        "(товар) Аксессуары" => 7 // 2
    ],
    "Фототехника" => [ // 1
        "(товар) Фотокамеры" => 6, // 2
        "(товар) Видеокамеры" => 3, // 2
    ],
    "(товар) Другое" => 3 // 1
];

function sum($array, $level = 0){
    static $count;
    static $items;

    if (is_array($array)){
        $level++;
        foreach($array as $element){
            sum($element, $level);
        }
    } else {
        $count++;
        $items += $array;
    }
    return array("count" => $count, "items" => $items);
}
$result = sum($array);
print_r($result);


// $sum = 0;
// foreach ($array as $level1){
//     if (is_array($level1)){
//         foreach ($level1 as $level2){
//             if (is_array($level2)){
//                 foreach ($level2 as $level3){
//                     if (is_array($level3)){
//                         foreach ($level3 as $level4){
//                             if (is_array($level4)){
//                                 print_r($level4);
//                             } else {
//                             $sum += $level4;
//                             }
//                         }
//                     } else {
//                         $sum += $level3;
//                     }
//                 }
//             } else {
//             $sum += $level2;
//             }
//         }
//     } else {
//     $sum += $level1;
//     }
// }
// echo "<hr>" . $sum;

$array = [
    "Автотехника" => [ // 1
        "(товар) Vivaro" => 5, // 2
        "(товар) Audi" => 2 // 2
    ],
    "(товар) Аксессуары" => 3 // 1
];

function sum2($array, $level = 0){
    static $count;
    static $items;

    if (is_array($array)){
        $level++;
        foreach($array as $element){
            sum2($element, $level);
        }
    } else {
        $count++;
        $items += $array;
    }
    return array("count" => $count, "items" => $items);
}
$result = sum2($array);
print_r($result);

// $sum = 0;
// foreach ($array as $level1){
//     if (is_array($level1)){
//         foreach ($level1 as $level2){
//             if (is_array($level2)){
//                 foreach ($level2 as $level3){
//                     if (is_array($level3)){
//                         foreach ($level3 as $level4){
//                             if (is_array($level4)){
//                                 print_r($level4);
//                             } else {
//                             $sum += $level4;
//                             }
//                         }
//                     } else {
//                         $sum += $level3;
//                     }
//                 }
//             } else {
//             $sum += $level2;
//             }
//         }
//     } else {
//     $sum += $level1;
//     }
// }
// echo "<hr>" . $sum;

$products = [
    ['name' => 'Телевизор', 'price' => '400', 'quantity' => 1],
    ['name' => 'Телефон', 'price' => '300', 'quantity' => 3],
    ['name' => 'Кроссовки', 'price' => '150', 'quantity' => 2]
];

// Вызываем функцию с аргументом
$result = cartTotalInfo($products);

function cartTotalInfo($pr)
{

    $totalQuantity = 0;
    $totalPrice = 0;

    foreach ($pr as $prod) {
        $totalQuantity += $prod['quantity'];
        $totalPrice += $prod['price'] * $prod['quantity'];
    }

    return $totalQuantity ."<br>". $totalPrice;
}

// Выводим результат
echo '<pre>';
print_r($result);
echo '</pre>';

print_r($products);
echo '<br>';