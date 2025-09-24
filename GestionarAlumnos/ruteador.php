<?php
echo $controlador;
echo "<br>";
echo $accion;


include_once("./controladores/controlador_" . $controlador . ".php");

$nombreClase = "Controlador" . ucfirst($controlador);
$instanciaControlador = new $nombreClase();


$instanciaControlador->$accion();
?>




