<?php

$username = $_POST['username'] ?? '';

// Validasi Username
if (strlen($username) < 8) {
    echo "Username minimal 6 karakter!";
    exit;
}

echo "Update profil berhasil!";
?>
