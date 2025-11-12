<?php
  if (empty($_GET["nombre"]) || empty($_GET['apellido'])){
    echo "Error, falta el parámetro nombre o el parámetro apellido";
    return;
  }else{
    echo "Hola ".$_GET['nombre'];
    echo " ".$_GET['apellido'];
  }

  echo "<hr>";
  print_r($_GET);
  echo "<hr>";
  print_r($_POST);
  echo "<hr>";
  print_r($_REQUEST);
