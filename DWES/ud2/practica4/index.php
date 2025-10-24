<?php
    namespace Practica4;
    require_once "vendor/autoload.php";


?>
<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <title>Practica 4</title>

</head>
  <body>
    <form action="logica.php" method="POST" enctype="multipart/form-data">
      <?php
      if(isset($_GET["err"])){
        echo "<p>Se ha producido un error</p>";
      }else if(isset($_GET["procesado"])){
        echo "<p>Se ha procesado correctamente</p>";
      }else if(isset($_GET["errF"])){
        echo "<p>Fallo durante la subida del archivo</p>";
      }
      ?>
        <label>Nombre:
            <input type="text" id="nombre" name="nombre">
        </label>
        <br>

        <label>Autor:
            <input type="text" name="autor">
        </label>
        <br>

        <label>Precio:
            <input type="number" name="precio">
        </label>
        <br>

        <label>Páginas:
            <input type="number" name="paginas">
        </label>
        <br>

        <label>Fichero:
            <input type="file" id="fichero" name="fichero">
        </label>
        <br>

        <input type="submit">

    </form>
    <?php
    $s = file_get_contents('store');
    $libro = unserialize($s);
    echo $libro;
    ?>
  </body>
</html>
