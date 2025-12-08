<?php
require_once "Book.php";
require_once "DVD.php";


$book = new Book("Belajar PHP OOP", 150000, 500, 350);
$dvd  = new DVD("Film Edukasi", 75000, 100, 120);

echo $book->getInfo();
echo "\n";
echo $dvd->getInfo();
?>
