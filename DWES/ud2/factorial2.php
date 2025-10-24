<?php

  function factorial($n){
    $res = 1;

    if(!is_int($n)){
      return -1;
    }
    if($n<0){
      throw new Exception("El número es negativo");
    }
    for ( $i = 1; $i <= $n; $i++){
      $res *= $i;
    }
    return $res;

  }

  try{
    echo factorial(3);
  }catch (Exception $e){
    echo $e->getMessage();
  }
