<?php
  $arr1 = [
    0 => 444,
    1 => 222,
    2 => 333,
  ];
  print_r($arr1);
  echo "<br> pos 0: $arr1[0] <br>";
  $arr1[0] = 555;
  print_r($arr1);
  echo "<hr>";
  $arr2 = array (
    "1111A" => "Juan Maria Ochoa",
    "1112A" => "Maria Mesa Cabeza",
    "1113A" => "Ana Puertas P3ral",
  );
  print_r($arr2);
  echo "<br>";
  $arr2["1113A"] = "Ana Puertas Segundo";
  print_r($arr2);
  echo "<hr>";

  foreach ( $arr2 as $nombre ) {
    echo "$nombre <br>";
  }

  foreach ( $arr2 as $codigo => $nobre ) {
    echo "Código: $codigo Nombre: $nombre <br>";
  }

  $arr3 = array (
    "viernes" => 22,
    "Sábado" => 34
  );

  foreach ( $arr3 as $cantidad ){
    $cantidad = $cantidad * 2;
  }
  print_r($arr3);
  echo "<br>";
  foreach ( $arr3 as &$cantidad ){
    $cantidad = $cantidad * 2;
  }
  print_r($arr3);