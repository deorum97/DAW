<?php
  for ( $i = 0; $i < 10; $i++ ){
    echo "fila $i<br>";
    for ( $j = 0 ; $j <= $i; $j+=$i)
      echo " columna $j";
  }