<?php
$logger = new class("INFO") {
    public function __construct(public string $level) {}

    public function log(string $msg) {
        echo "[$this->level] $msg\n";
    }
};

$logger->log("Sistem berjalan");
