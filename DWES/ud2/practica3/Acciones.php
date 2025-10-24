<?php
  namespace Practica3;


  interface Acciones
  {
    function iniciar(int $horas=0);
    function detener();
    function actualizar(array $a);
  }
