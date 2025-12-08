<?php
class Lifecycle {
    public function __construct() { echo "Objek dibuat\n"; }
    public function __destruct() { echo "Objek dihancurkan\n"; }
}

$obj = new Lifecycle();
$obj2 = $obj; // $obj2 menunjuk ke objek yang sama

unset($obj);
echo "Objek pertama di-unset\n";

unset($obj2);
echo "Semua referensi hilang\n";