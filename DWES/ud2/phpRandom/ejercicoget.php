<?php
 //escribe un fichero que reciba dosn parametros num1 y num2
 // y muestre su suma.hay que que comprobar que los dos argumentos existan y sean numeros

  if(empty($_GET['num1']) || empty($_GET['num2'])) {
    echo "Error, no has puesto ningun datos";
    return;
  }else{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    if(is_numeric($num1) || is_numeric($num2)){
      echo "Error, deben ser numeros";
      return;
    }else{
      $suma=$num1+$num2;
      echo $suma;
    }

  }

