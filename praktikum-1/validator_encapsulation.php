<?php

class Validator_Encapsulation {
    protected array $_inputType = [];
    protected array $errors = [];

    public function setInput(array $input): void {
        $this->_inputType = $input;
    }

    public function checkRequired(string $field): void {
        if (!isset($this->_inputType[$field]) || empty($this->_inputType[$field])) {
            $this->errors[$field] = "$field wajib diisi";
        }
    }

    public function fails(): bool {
        return !empty($this->errors);
    }

    public function errors(): array {
        return $this->errors;
    }
}

require "Validator_Encapsulation.php";

$val = new Validator_Encapsulation();

$val->_inputType = $_GET;


?>
