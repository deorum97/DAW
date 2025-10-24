<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST['usuario']=="usuario" and $_POST['clave']=="1234"){
      header("Location:bienvenido.html");
    }else{
      $err=true;
    }
  }
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Formulario de login</title>
    <meta charset = "UTF-8">
  </head>
  <body>
    <?php
      if(isset($err)){
        echo "<p> Revise usuario y contraseña</p>";
      }
    ?>
    <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for = "usuario">Usuario</label>
      <input value = "<?php if(isset($usuario))echo $usuario;?>"
      id = "usuario" name = "usuario" type = "text">
      <label for = "clave">Clave</label>
      <input id = "clave" name = "clave" type = "password">
      <input type = "submit">
    </form>
  </body>
</html>
