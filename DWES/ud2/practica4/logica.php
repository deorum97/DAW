<?php
    namespace Practica4;

    $directorio = "ficheros/";

    if($_SERVER["REQUEST_METHOD"]=="POST"){

      $nombre= $_POST["nombre"];
      $autor= $_POST["autor"];
      $precio= $_POST["precio"];
      $paginas= $_POST["paginas"];
      $fichero= $_FILES["fichero"];

      if((isset($nombre) && empty($nombre)) || (isset($autor) && empty($autor))
        || (isset($precio) && empty($precio)) || (isset($paginas) && empty($paginas))
        || !isset($_FILES['fichero'])){
        header("Location:index.php?err=TRUE");
      };


      $paginas = pasarAInterger($paginas);
      $precio = pasarAFloat($precio);
      $nombre = pasarATexto($nombre);
      $autor = pasarATexto($autor);

      $rutaFichero = $directorio.$fichero["name"];
      $tam=$fichero["size"];
      $tipo_mime = mime_content_type($fichero["tmp_name"]);
      $extension = pathinfo($fichero["name"])["extension"];
      if($tam <= 2*1024*1024 && $tipo_mime === 'application/pdf' && $extension === "pdf" && !file_exists($rutaFichero)){

        $res = move_uploaded_file($fichero["tmp_name"],
          $rutaFichero);
        if($res){
          header("Location:index.php?procesado=TRUE");
        }

      }else{
        todoOk($nombre,$paginas,$autor,$precio);
        header("Location:index.php?errF=TRUE");
      }
      todoOk($nombre,$paginas,$autor,$precio);


    }

    function pasarAInterger($numero){
        if(!is_int($numero)){
          $numero = (int)$numero;
        }
        return $numero;
    }

    function pasarAFloat($float){
        if(!is_float($float)){
          $float = (float)$float;
        }
        return $float;
    }

    function pasarATexto($texto){
      if(!is_string($texto)){
        $texto = (string)$texto;
      }
      return $texto;
    }

    function todoOk($nombre,$paginas,$autor,$precio){
      if(empty($nombre) || empty($autor)|| empty($precio)||empty($paginas)|| empty($fichero)){
        $libro = new leerLibro($nombre,$paginas,$autor,$precio);
        $s = serialize($libro);
        file_put_contents("store", $s);
      }
        header("Location:index.php");
    }






