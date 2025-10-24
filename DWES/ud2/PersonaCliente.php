<?php
  class Persona {
    private $DNI;
    private $nombre;
    private $apellido;
    function __construct( $DNI, $nombre, $apellido ){
      $this->DNI = $DNI;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
    }

    public function getNombre()
    {
      return $this->nombre;
    }

    public function getApellido()
    {
      return $this->apellido;
    }

    public function setNombre($nombre): void
    {
      $this->nombre = $nombre;
    }

    public function setApellido($apellido): void
    {
      $this->apellido = $apellido;
    }

    public function __toString(): string
    {
      return "Persona: ".$this->nombre." ".$this->apellido;
    }
  }

  $per = new Persona("11111111A", "Ana", "Puertas");
  echo $per."<br>";
  $per->setApellido("Montes");
  echo $per."<br>";


