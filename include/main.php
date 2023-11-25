<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "header.html";

?>

<!--CLASSES-->
<?php

class Book
{
    private $title;
    public $author;
    private $price;
    public $pages;

    function __construct($title, $author, $pages, $price) {
        $this->title = $title;
        $this->setPrice($price);
        $this->pages = $pages;
        $this->author = $author;
    }

    function isExpensive() {
        if ($this->price > 1000) {
            echo "$this->title is expensive <br>";
        } else {
            echo "$this->title is cheap <br>";
        }
    }

    function getPrice() {
        return $this->price;
    }

    function setPrice($price) {
        if (is_int($price)) {
            if ($price > 0 && $price < 2000) {
                $this->price = $price;
            }
        }
    }
}

$book1 = new Book("Harry Potter", "Potter", 400, 1200);
$book1->isExpensive();
$book2 = new Book("Great Egypt", "Warder", 700, 200);
$book2->isExpensive();
echo "Price of Book2: " . $book2->getPrice();
$book2->setPrice(1999);
echo "<br>Price of Book2: " . $book2->getPrice();

?>


<p>
    ferri iusto no docendi tractatos an sapien ea veritus nonumy luptatum esse invenire facilisis elementum comprehensam
    nisi sea qui maximus labores constituto sodales cum meliore elitr tale errem tation volumus delectus massa mentitum
    habemus graecis possit utroque ubique porro omnesque gubergren viris posuere evertitur necessitatibus tota postea
    mentitum felis verterem metus nibh faucibus magnis et quod facilis tritani dui cum volutpat tempor natum conubia
    saperet libero consul sumo tota melius risus morbi at atqui posuere fabellas cursus placerat vocibus vero nihil
    legere faucibus finibus autem est veniam posidonium varius adipisci omittam accusata accumsan graece impetus
    invenire eripuit eros mauris conceptam
</p>

<?php include "footer.html" ?>
</body>
</html>