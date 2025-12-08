<?php

// TIGHT COUPLING

// Class Querymysql yang tergantung pada Mysql
class QueryMySQL {
    public function getData($sql) {
        // disederhanakan seperti hasil dari MySQL
        return "mysql_result_of: {$sql}";
    }
}

// Class Display hanya bisa menerima hasil Mysql
class DisplayMySQL {
    public function show($mysqlResult) {
        echo "Menampilkan hasil MySQL: " . $mysqlResult . "\n\n";
    }
}

$query1 = new QueryMySQL();
$result1 = $query1->getData("SELECT * FROM products");

$display1 = new DisplayMySQL();
$display1->show($result1);



// LOOSE COUPLING

// Class Query netral (tidak tergantung database tertentu)
class Query {
    public function getData($sql) {
        return [
            ['id' => 1, 'name' => 'Produk A'],
            ['id' => 2, 'name' => 'Produk B']
        ];
    }
}

// Class Display hanya bergantung pada array
class Display {
    public function show(array $data) {
        foreach ($data as $row) {
            echo "ID: {$row['id']}, Nama: {$row['name']}\n";
        }
    }
}

$query2 = new Query();
$result2 = $query2->getData("SELECT * FROM products");

$display2 = new Display();
$display2->show($result2);
?>
