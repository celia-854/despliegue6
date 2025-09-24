<?php
require_once("./modelo/profesores.php");

class profesoresController {
    
    public function inicio() {
        $profesor = new Profesores();
        $data = $profesor->listar();
        require_once("./vista/profesores/inicio.php");
    }

    public function crear() {
        if ($_POST) {
            $profesor = new Profesores();
            $profesor->insertar($_POST['nombres'], $_POST['apellidos'], $_POST['direccion']);
            header("Location: index.php?controlador=profesores&accion=inicio");
        }
        require_once("./vista/profesores/crear.php");
    }

    public function editar() {
        $profesor = new Profesores();

        if (isset($_GET['id'])) {
            $data = $profesor->buscar($_GET['id']);
        }

        if ($_POST) {
            $profesor->actualizar($_POST['id'], $_POST['nombres'], $_POST['apellidos'], $_POST['direccion']);
            header("Location: index.php?controlador=profesores&accion=inicio");
        }

        require_once("./vista/profesores/editar.php");
    }

    public function eliminar() {
        if (isset($_GET['id'])) {
            $profesor = new Profesores();
            $profesor->eliminar($_GET['id']);
        }
        header("Location: index.php?controlador=profesores&accion=inicio");
    }
}
?>

