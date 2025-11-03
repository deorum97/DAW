<?php

// Menejar el formulario con envío POST: selector "lang"
// Actualizar cooke "lang"
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['lang'])){
    $lang = $_POST['lang'];
    setcookie('lang', $lang, time()+3600*24);
    header("location: selector_errores.php");
    exit;
}

//Crear Cookies
if (!isset($_COOKIE['lang'])){
    setcookie('lang', 'es', time() + 3600*24);
    $lang = 'es';
}else{
    $lang = $_COOKIE['lang'];
}

if (!isset($_COOKIE['visitas'])) { // si no existe
    setcookie('visitas', '1', time() + 3600 * 24);
    echo "Bienvenido por primera vez";
} else { // si existe
    $visitas = (int) $_COOKIE['visitas'];
    $visitas++; // se reescribe incrementada
    setcookie('visitas', $visitas, time() + 3600 * 24);
    echo "Bienvenido por $visitas vez";
}


//Borrar Cookies & orden envíada vía GET
if (isset($_GET['borrar'])) {
    // Para borrar la cookie se le da una fecha de expiración pasada
    setcookie("visitas", "", time() - 3600);
    setcookie('lang', "", time()-3600*24);
    echo "Cookie 'visitas' borrada.<br>";
    echo "<a href='selector_errores.php'>Inicio</a>";
    exit;
}

// Enlace para borrar la cookie
echo "<br><a href='selector_errores.php?borrar=1'>Borrar cookie</a>";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario para cambio de idioma</title>
</head>
<body>
    <form method="post">
        <select name="lang">
            <!-- Forma 1: ternario -->
            <option value= "es" <?php echo ($lang=="es")?"selected":""?>>ES</option>
            <option value= "en" <?php echo ($lang=="en")?"selected":""?>>EN</option>
            <!-- Forma 2: if compacto -->
            <option value="fr" <?php if ($lang=="fr") echo "selected"; ?>>FR</option>
            <!-- Forma 3: sintaxis abreviada de php -->
            <option value="de" <?= ($lang=="de") ? "selected" : "" ?>>DE</option>

        </select>
        <input type="submit" value="guardar">
    </form>
</body>
</html>
