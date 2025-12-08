<?php
class Car {
    public function accelerate() {
        echo "Mobil melaju dengan mesin bensin\n";
    }
}

class Motorcycle {
    public function accelerate() {
        echo "Motor melaju dengan cepat menggunakan gas tangan\n";
    }
}

$kendaraan1 = new Car();
$kendaraan2 = new Motorcycle();

// pemanggilan method sama
$kendaraan1->accelerate();
$kendaraan2->accelerate();
?>
