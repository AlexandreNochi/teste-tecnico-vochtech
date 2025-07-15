<?php

namespace App\ValueObjects;

final class Cnpj
{
  private string $cnpj;

  public function __construct(string $value) {
    $this->cnpj = $value;
  }

  public function validate(): bool {
    return true;
  }

  public function __toString(): string {
    return $this->cnpj;
  }
}