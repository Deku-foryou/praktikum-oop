<?php
require_once "Product.php";

// Class turunan dari Product
class Book extends Product {
    public $pages;

    public function __construct($name, $price, $weight, $pages) {
        parent::__construct($name, $price, $weight); // panggil constructor induk
        $this->pages = $pages;
    }

    // Override method getInfo
    public function getInfo() {
        return parent::getInfo() . ", halaman: {$this->pages}";
    }
}
?>
