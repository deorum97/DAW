<?php
  namespace Practica3;
  require_once "vendor/autoload.php";

  define("N",3);
  $ayuda = new Ayuda();
  $libroUno = new LeerLibro("Reina roja",420, "Juan Gomez", 14.34);
  echo $libroUno;
  $libroUno=null;
  $libroDos = new LeerLibro("El señor de los anillos", 800,"Tolkien",20);
  echo $libroDos;

  $libroTres = new LeerLibro("La niebla",300, "Stephen King",55.55);
  echo $libroTres;
  $n=3;
  $libros=[];
  for($i=1;$i<=N;$i++){
    $titulo = $ayuda->generar_cadena();
    $paginas= $ayuda->generar_entero();
    $autor=$ayuda->generar_cadena();
    $precio=$ayuda->generar_decimal();

    $libro=new LeerLibro($titulo,$paginas,$autor,$precio);

    $libros[]=$libro;
  }

  echo "<hr>Libros generados automaticamente:<br>";
  foreach ($libros as $lib){
    echo $lib;
  }
  echo "<hr>";

  $libroTres->iniciar();
  $libroTres->detener();

  $juego1 = new JugarVideojuego($ayuda->generar_cadena(),$ayuda->generar_cadena(),$ayuda->generar_entero());
  $juego1->iniciar(2);
  $juego1->iniciar(2);
  $juego1->iniciar(5);


  //a la hora de introducir el valor con el set magico usas el ->`como quieras que se llame la key` = ""lo que quieras guardar
  $juego1->otro = "otra cosa";

  //para llamarlo usas solamente la key
  echo $juego1->otro;
