<?php
require_once "data.php";

foreach ($books as $book) {
    $book->showBook();
}
