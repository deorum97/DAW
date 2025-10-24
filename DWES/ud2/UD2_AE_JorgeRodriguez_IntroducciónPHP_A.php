<?php

  function isPrimo($n){
    $d=0;
    for ($i = 1; $i <= $n; $i++){

      if ($n%$i==0){
        $d++;
        if($d>2){
          return false;
        }
      };

    };

    return true;

  };

  function primo($n){
    $x=$n-1;
    if (isPrimo($n)){
      echo "El número $n es primo";
      if (isPrimo($x)){
        echo ' el anterior: '.$x.' es primo<br>';
      }else{
        echo ' el anterior: '.$x.' no es primo<br>';
      }
    }else{
      echo "El número $n no es primo";
      if (isPrimo($x)){
        echo " el anterior: ".$x." es primo<br>";
      }else{
        echo " el anterior: ".$x." no es primo<br>";
      }
    }
  };
  primo(1);
  primo(4);

  primo(7);
