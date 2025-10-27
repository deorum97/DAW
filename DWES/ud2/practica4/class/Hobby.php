<?php


  abstract class Hobby {

    private $sesion=[];
    private $nombre;

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

  }
