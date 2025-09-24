<?php

class Profesores {
    private $id;
    private $nombre;
    private $apellidos;
    private $direccion;
    private $curso;
    private $dni;
    private $anio_experiencia;
    private $accion;

    public function __construct($id, $nombre, $apellidos, $direccion, $curso, $dni, $anio_experiencia, $accion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
        $this->curso = $curso;
        $this->dni = $dni;
        $this->anio_experiencia = $anio_experiencia;
        $this->accion = $accion;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
        return $this;
    }

    public function getAnioExperiencia() {
        return $this->anio_experiencia;
    }

    public function setAnioExperiencia($anio_experiencia) {
        $this->anio_experiencia = $anio_experiencia;
        return $this;
    }

    public function getAccion() {
        return $this->accion;
    }

    public function setAccion($accion) {
        $this->accion = $accion;
        return $this;
    }
}
?>
