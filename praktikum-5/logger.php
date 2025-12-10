<?php

interface Logger {
    public function log(string $pesan): void;
}

class DatabaseLogger implements Logger {
    public function log(string $pesan): void {
        echo "Menyimpan ke database: $pesan\n";
    }
}


class FileLogger implements Logger {
    public function log(string $pesan): void {
        echo "Menulis ke file: $pesan\n";
    }
}

class ConsoleLogger implements Logger {
    public function log(string $pesan): void {
        echo "Menampilkan ke konsol: $pesan\n";
    }
}

interface Notifier {
    public function send(string $pesan): void;
}

class AppService implements Logger, Notifier {
    public function log(string $pesan): void {
        echo "Log aplikasi: $pesan\n";
    }

    public function send(string $pesan): void {
        echo "Kirim notifikasi: $pesan\n";
    }
}


$lg = new ConsoleLogger(); 
$lg->log("Test log"); 

$dbLogger = new DatabaseLogger();
$dbLogger->log("Data user berhasil disimpan");

$app = new AppService();
$app->log("Server berjalan");
$app->send("Pengguna berhasil login");
