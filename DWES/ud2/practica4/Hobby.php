<?php
  namespace Practica4;


  abstract class Hobby implements Acciones {

    private $sesion=[];
    private $nombre;

    private $timpoMaximo=6;
    private $timpoMinimo=1;
    private static $timpoUsado=0;
    protected function __construct($nombre)
    {
      $this->nombre=$nombre;
    }
    protected function setNombre($nombre){
     $this->nombre=$nombre;
    }
    protected function getNombre(){
      return $this->nombre;
    }

    protected function getSesion(){
      return $this->sesion;
    }

    abstract function iniciar(int $horas=0);
    abstract function detener();
    abstract function actualizar(array $a);
  }
