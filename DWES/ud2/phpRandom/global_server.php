<?php
    echo "Ruta dentro de htdocs: ". $_SERVER['PHP_SELF'];
    echo "<br>Nombre del servidor: ". $_SERVER['SERVER_NAME'];
    echo "<br>Software del servidor: ". $_SERVER['SERVER_SOFTWARE'];
    echo "<br>Protocolo: ". $_SERVER['SERVER_PROTOCOL'];
    echo "<br>Método de la petición: ". $_SERVER['REQUEST_METHOD'];
