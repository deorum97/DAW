<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        echo $_SESSION["usuario"];
        header("Location:calculos.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueo</title>
</head>
<body>
    <form method="get" action="autenticacion.php">
        <label for="usuario">Usuario:
            <input type="text" name="usuario">
        </label>
        <br>
        <label for="contraseña">Contraseña:
            <input type="password" name="clave">
        </label>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>