<?php
class Product {
    // Langsung deklarasi visibility (public) di dalam kurung
    public function __construct(
        public string $name,
        public int $price
    ) {}
}

$p = new Product("Laptop", 15000);
echo $p->name . " harganya " . $p->price . "\n";