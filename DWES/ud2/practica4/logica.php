<?php
  require __DIR__ . '/vendor/autoload.php';

  $directorio = "ficheros/";

  if($_SERVER["REQUEST_METHOD"]=="POST"){

    $nombre= $_POST["nombre"];
    $autor= $_POST["autor"];
    $precio= $_POST["precio"];
    $paginas= $_POST["paginas"];
    $fichero= $_FILES["fichero"];
    $rutaFichero = $directorio.$fichero["name"];

    if((isset($nombre) && empty($nombre)) || (isset($autor) && empty($autor))
      || (isset($precio) && empty($precio)) || (isset($paginas) && empty($paginas))
      ){
      header("Location:index.php?err=TRUE");
    };


    $paginas = pasarAInterger($paginas);
    $precio = pasarAFloat($precio);
    $nombre = pasarATexto($nombre);
    $autor = pasarATexto($autor);

    
    if(!isset($fichero) || $fichero['error'] === UPLOAD_ERR_NO_FILE){
      todoOk($nombre,$paginas,$autor,$precio,$rutaFichero);
      header("Location:index.php?procesado=TRUE");

    }else{        

      $tam=$fichero["size"];
      $tipo_mime = mime_content_type($fichero["tmp_name"]);
      $extension = pathinfo($fichero["name"])["extension"];

      if($tam <= 2*1024*1024 && $tipo_mime === 'application/pdf' && $extension === "pdf" && !file_exists($rutaFichero)){

        $res = move_uploaded_file($fichero["tmp_name"], $rutaFichero);
        if($res){
          todoOk($nombre,$paginas,$autor,$precio,$rutaFichero);
          header("Location:index.php?procesado=TRUE");
        }

      }else{
        todoOk($nombre,$paginas,$autor,$precio,$rutaFichero);
        header("Location:index.php?errF=TRUE");
      }
    }
    
    
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

  function todoOk($nombre,$paginas,$autor,$precio,$rutaFichero){
    
    $libro = new LeerLibro($nombre,$paginas,$autor,$precio);
    $libro->fotografia=$rutaFichero;
    $s = serialize($libro);
    session_start();
    $_SESSION["hobby"]=$s;
    
  }






