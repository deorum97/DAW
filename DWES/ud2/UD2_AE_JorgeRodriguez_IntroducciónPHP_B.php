<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <style>
    table{
      border-collapse: collapse
    }
    th, td{
      border: 1px solid black;
      padding: 5px;
    }

  </style>
</head>

<body>
  <table>
  <?php

    define("N", rand(0,10));

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
      $n = rand(100, 99999999);
      return $n;
    }

    function generar_decimal(){
      $e = rand(0, 999);
      $d = rand(0, 99999);
      $n = $e.".".$d;
      return (float)$n;
    }

    function generar_fecha(){
      $inicio = strtotime("1 january 2025");
      $final = strtotime("30 september 2025");
      $fecha = date('d/m/Y', rand($inicio, $final));
      return $fecha;
    }

    function generar_arrays(){
      $catalogo=array();
      for($i = 0; $i<N; $i++){
        $arr = [
          'titulo' => $c = generar_cadena(),
          'n_paginas' => $np = generar_entero(),
          'precio' => $p = generar_decimal(),
          'fecha_publicacion' => $f = generar_fecha(),
        ];
        $catalogo[] = $arr;
      }
      mostrar_tabla($catalogo);
    }

    function mostrar_tabla($arr){
      echo '<tr>';
      echo "<th>Titulo</th>";
      echo "<th>Paginas</th>";
      echo "<th>Precio</th>";
      echo "<th>Fecha de publicación</th>";
      echo "</tr>";

      foreach($arr as $libro){
        echo "<tr>";
        echo "<td>".$libro["titulo"]."</td>";
        echo "<td>".$libro["n_paginas"]."</td>";
        echo "<td>".$libro["precio"]."</td>";
        echo "<td>".$libro["fecha_publicacion"]."</td>";
        echo "</tr>";
      }

    }

    generar_arrays();
  ?>
  </table>
</body>
