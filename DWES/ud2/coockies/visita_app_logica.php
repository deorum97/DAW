<?php
    $idioma = $_POST["idioma"];
    setcookie('idioma', $idioma, time() + 3600 * 24);
    header("Location:visita_app.php");