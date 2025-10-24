<?php
include "personaCliente.php";

class Cliente extends Persona
{
  private $saldo = 0;

  function __construct($DNI, $nombre, $apellido, $saldo)
  {
    parent::__construct($DNI, $nombre, $apellido);
    $this->$saldo = $saldo;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  public function setSaldo(int $saldo): void
  {
    $this->saldo = $saldo;
  }

  public function __toString(): string
  {
    return "Cliente: " . $this->getNombre();
  }
}

$cli = new Cliente("2222222A", "Pedro", "Sales", 100);
echo $cli . "<br>";
