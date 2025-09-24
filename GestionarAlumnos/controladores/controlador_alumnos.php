<?php

include_once("./modelos/Alumnos.php");
include_once("./conexion.php");


class ControladorAlumnos {
  public function inicio() {
    

  

    $listaAlumnos = [];
    $conexionBD = BD::crearInstancia(); 
    $sql = $conexionBD->query("SELECT * FROM alumnos");

    foreach ($sql->fetchAll() as $alumno) {
        $listaAlumnos[] = new Alumnos(
            $alumno['id'],
            $alumno['nombre'],
            $alumno['apellidos'],
            $alumno['direccion'],
            $alumno['telefono'],
            $alumno['email']
        );
    }





    require_once './vista/alumnos/inicio.php';
  }

  public function crear() {

            $conexionBD = BD::crearInstancia();

        if ($_POST) {
            $nombre = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];

            $sql = $conexionBD->prepare("INSERT INTO alumnos (nombre, apellidos, direccion, telefono, email) VALUES (?,?,?,?,?)");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $apellidos);
            $sql->bindParam(3, $direccion);
            $sql->bindParam(4, $telefono);
            $sql->bindParam(5, $email);
            $sql->execute();

            header("Location: index.php?controlador=alumnos&accion=inicio");
        }

    require_once './vista/alumnos/crear.php';
  }

  public function editar() {

    $conexionBD = BD::crearInstancia();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare("SELECT * FROM alumnos WHERE id=?");
            $sql->bindParam(1, $id);
            $sql->execute();
            $alumnoDB = $sql->fetch();
            $alumno = new Alumnos(
                $alumnoDB['id'],
                $alumnoDB['nombre'],
                $alumnoDB['apellidos'],
                $alumnoDB['direccion'],
                $alumnoDB['telefono'],
                $alumnoDB['email']
            );
        }


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = $_POST['id'];
                $nombre = $_POST['nombres'];
                $apellidos = $_POST['apellidos'];        
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];

                $conexionBD = BD::crearInstancia();
                $sql = $conexionBD->prepare("UPDATE alumnos SET
                    nombre = ?,
                    apellidos = ?,
                    direccion = ?,
                    telefono = ?,
                    email = ?
                    WHERE id = ?");

                $sql->bindParam(1, $nombre);
                $sql->bindParam(2, $apellidos);
                $sql->bindParam(3, $direccion);
                $sql->bindParam(4, $telefono);
                $sql->bindParam(5, $email);
                $sql->bindParam(6, $id);
                $sql->execute();

    header("Location: ./?controlador=alumnos&accion=inicio");
}


    require_once './vista/alumnos/editar.php';
  }


  public function eliminar()
    {
        $id = $_GET['id'];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM alumnos WHERE id=?");
        $sql->bindParam(1, $id);
        $sql->execute();
        header("Location:./?controlador=alumnos&accion=inicio");
    }

}
?>
