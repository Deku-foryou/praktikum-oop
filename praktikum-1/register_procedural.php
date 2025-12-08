<?php

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Validasi Username 
if (strlen($username) < 8) {
    echo "Username minimal 6 karakter!";
    exit;
}

// Validasi Password
if (strlen($password) < 8) {
    echo "Password minimal 8 karakter!";
    exit;
}

echo "Registrasi berhasil!";
?>
