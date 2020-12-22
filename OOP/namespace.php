<?php
require_once "index01.php"; 
$obj = new \Home\UserConstruct("Nadya ", "777 ", "zhizhnevskaya@yandex.ru ", "Vitebsk ");
echo $obj->getInfo();
