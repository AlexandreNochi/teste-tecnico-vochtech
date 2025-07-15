<?php

namespace App\ValueObjects;

final class Cpf
{
  private string $cpf;

  public function __construct(string $value) {
    $this->cpf = $value;
  }

  public function validate(): bool {
    return true;
  }

  public function __toString(): string {
    return $this->cpf;
  }
}