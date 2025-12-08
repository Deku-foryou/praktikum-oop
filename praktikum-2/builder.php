<?php
class Builder {
private string $text = "";
public function add(string $s): self {
$this->text .= $s;
return $this;
}

public function upper(): self {
$this->text = strtoupper($this->text);
return $this;
}
public function get(): string {
return $this->text;

}
}

$b = (new Builder())->add("Halo ")->add("Dunia");
echo (new Builder())->add("halo ")->add("dunia")->upper()->get();
