<?php

interface ICocheDAO {
public function crear(Coche $coche);
public function obtenerCoche($matricula);
public function eliminar($matricula);
public function actualizar($matricula, Coche $nuevoCoche);
public function verTodos();
}

?>