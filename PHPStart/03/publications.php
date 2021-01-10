<?php

require_once "data.php";

foreach ($publications as $value) {
    $value->printItem();
}
