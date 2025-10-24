<?php
  namespace Practica4;

class Ayuda{
  function generar_cadena(){
    $letras = "abcdefghijklmnopqrstuvwxyz";
    $n = rand(1, 10);
    $cadena = "";
    for ($i = 0; $i<$n ; $i++){
      $rletra = $letras[rand(0, strlen($letras)-1)];
      $cadena .= $rletra;
    }

    return $cadena;
  }

  function generar_entero(){
    $n = rand(100, 999);
    return $n;
  }

  function generar_decimal(){
    $e = rand(0, 99);
    $d = rand(0, 99);
    $n = $e.".".$d;
    return (float)$n;
  }

}
