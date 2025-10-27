<?php
    require __DIR__ . '/vendor/autoload.php';
    session_start();


?>
<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <title>Practica 4</title>
  <link rel="stylesheet" href="css.css">

</head>
  <body>
    <form action="logica.php" method="POST" enctype="multipart/form-data">
      <?php
      if(isset($_GET["err"])){
        echo '<div class="mensaje error">❌ Se ha producido un error.</div>';
      } elseif(isset($_GET["procesado"])){
        echo '<div class="mensaje exito">✅ Se ha procesado correctamente.</div>';
      } elseif(isset($_GET["errF"])){
        echo '<div class="mensaje advertencia">⚠️ Fallo durante la subida del archivo.</div>';
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

      <div class="resultado">
        <?php
        if(isset($_SESSION["hobby"])){
          $libro = unserialize($_SESSION["hobby"]);
          echo $libro." Ruta de fotografia: ".$libro->fotografia;
        }else if(!isset($_SESSION["hobby"])){
          echo "aun no hay libro";
        }
        ?>
      </div>
    </form>
    
  </body>
</html>
