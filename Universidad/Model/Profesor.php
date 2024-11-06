<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Profesor extends Conexion {

    public $id, $nombre, $apellido, $fecha_nacimiento, $cursos_id, $created_at, $updated_at;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO profesores (nombre, apellido, fecha_nacimiento, created_at, updated_at) VALUES (?, ?, ?, ?, ?)");
        $pre->bind_param("sssss", $this->nombre, $this->apellido, $this->fecha_nacimiento, $this->created_at, $this->updated_at);
        $pre->execute();

        $this->id = mysqli_insert_id($this->con);

        foreach ($this->cursos_id as $curso_id) {
            $pre = mysqli_prepare($this->con, "INSERT INTO curso_profesor (curso_id, profesor_id) VALUES (?, ?)");
            $pre->bind_param("ii", $curso_id, $this->id);
            $pre->execute();
        }

    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores");
        $result->execute();
        $valoresDb = $result->get_result();
        $profesores = [];
        while ($profesor = $valoresDb->fetch_object(Profesor::class)) {
            $profesores[] = $profesor;
        }
        return $profesores;
    }

    public static function allPaginado($curso_id) {
        $conexion = new Conexion();
        $conexion->conectar();

        $paginas = [];

        if ($curso_id) {

            $result = mysqli_prepare($conexion->con, "SELECT COUNT(*) AS total FROM profesores INNER JOIN curso_profesor ON profesores.id = curso_profesor.profesor_id INNER JOIN cursos ON curso_profesor.profesor_id = profesores.id WHERE profesores.id = 1 ORDER BY profesores.nombre ASC");
            $result->execute();
            $valoresDb = $result->get_result();
            $fila = $valoresDb->fetch_assoc();
            $cantidad_profesores = $fila['total'];

        }
        else{

            $result = mysqli_prepare($conexion->con, "SELECT COUNT(*) AS total FROM profesores ORDER BY nombre ASC");
            $result->execute();
            $valoresDb = $result->get_result();
            $fila = $valoresDb->fetch_assoc();
            $cantidad_profesores = $fila['total'];

        }

        $cantidad_paginas = ceil($cantidad_profesores / 9);


        for ($i=0; $i < $cantidad_paginas; $i++) { 

            $offset_value = 9 * $i;

            if ($curso_id) {
                $result = mysqli_prepare($conexion->con, "SELECT profesores.* FROM profesores INNER JOIN curso_profesor ON profesores.id = curso_profesor.profesor_id INNER JOIN cursos ON curso_profesor.profesor_id = profesores.id WHERE cursos.id = $curso_id ORDER BY profesores.nombre ASC LIMIT 9 OFFSET $offset_value");
            }
            else{
                $result = mysqli_prepare($conexion->con, "SELECT profesores.* FROM profesores ORDER BY profesores.nombre ASC LIMIT 9 OFFSET $offset_value");
            }

            $result->execute();
            $valoresDb = $result->get_result();
    
            $profesores = [];
            while ($profesor = $valoresDb->fetch_object(Profesor::class)) {
                $profesores[] = $profesor;
            }

            $paginas[] = $profesores;
        }
        

        return $paginas;
    }


    // public function materia() {
    //     return Materia::getById($this->materia_id);
    // }

    public static function getById($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $profesor = $valorDb->fetch_object(Profesor::class);
        return $profesor;
    }

    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM profesores WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesores SET nombre = ?, apellido = ?, fecha_nacimiento = ? WHERE id = ?");
        $pre->bind_param("sssi", $this->nombre, $this->apellido, $this->fecha_nacimiento, $this->id);
        $pre->execute();
    }

    public static function profesoresPorMes() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT MONTH(created_at) AS mes, COUNT(id) AS CantidadProfesores FROM profesores GROUP BY mes");
        $result->execute();
        
        $valoresDb = $result->get_result();

        $datos = [];

        for ($i = 1; $i <= 12; $i++) {
            $datos[$i] = [
                'mes' => $i,
                'cantidad' => 0
            ];
        }

        while ($row = $valoresDb->fetch_assoc()) {
            $mes = (int) $row['mes'];
            $cantidad = (int) $row['CantidadProfesores'];
            $datos[$mes]['cantidad'] = $cantidad;
        }

        return array_values($datos);
    }

    public static function truncate() {
        $conexion = new Conexion();
        $conexion->conectar();
        mysqli_query($conexion->con, "SET FOREIGN_KEY_CHECKS = 0");
        $result = mysqli_prepare($conexion->con, "TRUNCATE TABLE issp.profesores");
        $result->execute();
        mysqli_query($conexion->con, "SET FOREIGN_KEY_CHECKS = 1");
    }
}