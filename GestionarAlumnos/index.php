<?php

if (isset($_GET["controlador"]) && isset($_GET["accion"])) 
    
    {
    if ($_GET["controlador"] != "" && $_GET["accion"] != "") 
        
    {

        $controlador = $_GET["controlador"];
        $accion = $_GET["accion"];

    } else {

        $controlador = "paginas";
        $accion = "inicio";
        echo $controlador . $accion;

    }
        
} else {
    $controlador = "paginas";
    $accion = "inicio";
}

require_once("./vista/templates.php");



 ?>



