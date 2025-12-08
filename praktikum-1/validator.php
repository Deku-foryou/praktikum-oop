<?php

class Validator {
    private array $errors = [];

    // Validasi panjang teks
    public function checkTextLength(string $field, string $value, int $min, int $max): void {
        $length = strlen($value);

        if ($length < $min) {
            $this->errors[$field] = "$field minimal $min karakter";
        } elseif ($length > $max) {
            $this->errors[$field] = "$field maksimal $max karakter";
        }
    }

    // Validasi email
    public function checkEmail(string $field, string $value): void {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "Format $field tidak valid";
        }
    }

    // Cek error
    public function fails(): bool {
        return !empty($this->errors);
    }

    // Ambil semua error
    public function errors(): array {
        return $this->errors;
    }
}
?>
