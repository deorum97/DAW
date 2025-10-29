<?php
if (isset($_GET['borrar'])) {
    // Para borrar la cookie se le da una fecha de expiración pasada
    setcookie("visitas", "", time() - 3600);
    echo "Cookie 'visitas' borrada.<br>";
    echo "<a href='contador_visitas2P.php'>Inicio</a>";
    exit;
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
// Enlace para borrar la cookie
echo "<br><a href='contador_visitas2P.php?borrar=1'>Borrar cookie</a>";
?>