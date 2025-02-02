<?php

require_once 'Conexion.php';
require_once 'Materia.php';
date_default_timezone_set('America/Argentina/Buenos_Aires');

class TipoMateria extends Conexion {

    public $id, $tipo_materia;

    // public function create() {
    //     $this->conectar();
    //     $pre = mysqli_prepare($this->con, "INSERT INTO profesores (nombre, apellido, materia_id) VALUES (?, ?, ?)");
    //     $pre->bind_param("ssi", $this->nombre, $this->apellido, $this->materia_id);
    //     $pre->execute();
    // }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM tipos_materias");
        $result->execute();
        $valoresDb = $result->get_result();
        $tipos_materias = [];
        while ($tipo_materia = $valoresDb->fetch_object(TipoMateria::class)) {
            $tipos_materias[] = $tipo_materia;
        }
        return $tipos_materias;
    }

    // public function materia() {
    //     return Materia::getById($this->materia_id);
    // }

    // public static function getById($id) {
    //     $conexion = new Conexion();
    //     $conexion->conectar();
    //     $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores WHERE id = ?");
    //     $result->bind_param("i", $id);
    //     $result->execute();
    //     $valorDb = $result->get_result();
    //     $profesor = $valorDb->fetch_object(Profesor::class);
    //     return $profesor;
    // }

    // public function delete() {
    //     $this->conectar();
    //     $pre = mysqli_prepare($this->con, "DELETE FROM profesores WHERE id = ?");
    //     $pre->bind_param("i", $this->id);
    //     $pre->execute();
    // }

    // public function update() {
    //     $this->conectar();
    //     $pre = mysqli_prepare($this->con, "UPDATE profesores SET nombre = ?, apellido = ?, materia_id = ? WHERE id = ?");
    //     $pre->bind_param("sssi", $this->nombre, $this->apellido, $this->materia_id, $this->id);
    //     $pre->execute();
    // }
}