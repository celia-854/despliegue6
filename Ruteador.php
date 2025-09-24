<?php
echo $controlador;
echo "<br>";
echo $accion;

include_once("./controladores/controlador_" . $controlador . ".php");

$nombreClase = "Controlador" . ucfirst($controlador);
$instancia = new $nombreClase();
$instancia->$accion();
?>
