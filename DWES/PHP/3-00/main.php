<?php

require_once("CocheDAO.php");


$c1 = new Coche("A1", "Audi","A4");
$ao = new CocheDAO();


$ao->crear($c1);
$ao->crear($c1);


?>