<?php

abstract class Publication
{
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $author_name;
    public $preview;
    public $type;

    abstract public function printItem();

    function __construct($row)
    {
        $this->id = $row["id"];
        $this->title = $row["title"];
        $this->date = $row["date"];
        $this->short_content = $row["short_content"];
        $this->content = $row["content"];
        $this->author_name = $row["author_name"];
        $this->preview = $row["preview"];
        $this->type = $row["type"];
    }
}

class NewsPublication extends Publication
{
    public function printItem()
    {
        echo "Новость: " . $this->title . "<br>";
        echo "Дата: " . $this->date . "<br>";
        echo "<hr>";
    }
}

class ArticlePublication extends Publication
{
    public function printItem()
    {
        echo "Статья: " . $this->title . "<br>";
        echo "Автор: " . $this->author_name . "<br>";
        echo "<hr>";
    }
}

class PhotoReportPublication extends Publication
{
    public function printItem()
    {
        echo "Фотоотчёт: " . $this->title . "<br>";
        echo '<img src="http://study/PHPStart/03/' . $this->preview . '">' . "<br>";
        echo "<hr>";
    }
}
