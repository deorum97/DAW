<?php
  $var = 5;
  $res = 1;
  echo "El factorial de $var es: $var". '!=';
  for ( $i = 1; $i <= $var; $i++){
    $res *= $i;
    if ( $i >= $var){
      echo "$i=$res";
    }else{
      echo $i.'x';
    }
  }
