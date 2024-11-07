<?php

require_once 'Conexion.php';
require_once 'Alumno.php';
require_once 'Profesor.php';
require_once 'Curso.php';
date_default_timezone_set('America/Argentina/Buenos_Aires');

class Materia extends Conexion {

    public $id, $nombre, $tipo_materia_id, $created_at, $updated_at;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO materias (nombre, tipo_materia_id, created_at, updated_at) VALUES (?, ?, ?, ?)");
        $pre->bind_param("siss", $this->nombre, $this->tipo_materia_id, $this->created_at, $this->updated_at);
        $pre->execute();
    }


    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM materias ORDER BY nombre ASC");
        $result->execute();
        $valoresDb = $result->get_result();
        $materias = [];
        while ($materia = $valoresDb->fetch_object(Materia::class)) {
            $materias[] = $materia;
        }
        return $materias;
    }

    public static function allPaginado($curso_id) {
        $conexion = new Conexion();
        $conexion->conectar();

        $paginas = [];

        if ($curso_id) {

            $result = mysqli_prepare($conexion->con, "SELECT COUNT(*) AS total FROM materias INNER JOIN curso_materia ON materias.id = curso_materia.materia_id INNER JOIN cursos ON curso_materia.curso_id = cursos.id WHERE cursos.id = 1 ORDER BY materias.nombre ASC");
            $result->execute();
            $valoresDb = $result->get_result();
            $fila = $valoresDb->fetch_assoc();
            $cantidad_materias = $fila['total'];

        }
        else{

            $result = mysqli_prepare($conexion->con, "SELECT COUNT(*) AS total FROM materias ORDER BY nombre ASC");
            $result->execute();
            $valoresDb = $result->get_result();
            $fila = $valoresDb->fetch_assoc();
            $cantidad_materias = $fila['total'];

        }

        $cantidad_paginas = ceil($cantidad_materias / 9);


        for ($i=0; $i < $cantidad_paginas; $i++) { 

            $offset_value = 9 * $i;

            if ($curso_id) {
                $result = mysqli_prepare($conexion->con, "SELECT materias.* FROM materias INNER JOIN curso_materia ON materias.id = curso_materia.materia_id INNER JOIN cursos ON curso_materia.curso_id = cursos.id WHERE cursos.id = $curso_id ORDER BY materias.nombre ASC LIMIT 9 OFFSET $offset_value");
            }
            else{
                $result = mysqli_prepare($conexion->con, "SELECT materias.* FROM materias ORDER BY materias.nombre ASC LIMIT 9 OFFSET $offset_value");
            }

            $result->execute();
            $valoresDb = $result->get_result();
    
            $materias = [];
            while ($materia = $valoresDb->fetch_object(Materia::class)) {
                $materias[] = $materia;
            }

            $paginas[] = $materias;
        }
        

        return $paginas;
    }


    public static function getById($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM materias WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $materia = $valorDb->fetch_object(Materia::class);
        return $materia;
    }

    public function profesores() {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT * FROM profesores WHERE materia_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();

        $profesores = [];
        
        while ($profesor = $valoresDb->fetch_object(Profesor::class)) {
            $profesores[] = $profesor;
        }
        return $profesores;
    }

    public function alumnos() {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT alumnos.* FROM alumnos INNER JOIN alumno_materia ON alumnos.id = alumno_materia.alumno_id WHERE alumno_materia.materia_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();

        $alumnos = [];
        while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
            $alumnos[] = $alumno;
        }

        return $alumnos;
    }

    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM materias WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE materias SET nombre = ?, tipo_materia_id = ? WHERE id = ?");
        $pre->bind_param("sii", $this->nombre, $this->tipo_materia_id, $this->id);
        $pre->execute();
    }

    public static function alumno_materia($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT materia_id FROM alumno_materia WHERE id = $id");
        $result->execute();
        return $result->get_result();
         
    }

    public function tipoMateria() {
        $this->conectar();
        
        $result = mysqli_prepare($this->con, "SELECT tipos_materias.tipo_materia FROM tipos_materias INNER JOIN materias ON materias.tipo_materia_id = tipos_materias.id WHERE materias.id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();
            $tipo_materia = $valoresDb->fetch_object();
        return $tipo_materia ? $tipo_materia->tipo_materia : null;
    }

    public static function truncate() {
        $conexion = new Conexion();
        $conexion->conectar();
        mysqli_query($conexion->con, "SET FOREIGN_KEY_CHECKS = 0");
        $result = mysqli_prepare($conexion->con, "TRUNCATE TABLE issp.materias");
        $result->execute();
        mysqli_query($conexion->con, "SET FOREIGN_KEY_CHECKS = 1");
    }

    public function cursos() {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT cursos.* FROM materias INNER JOIN curso_materia ON materias.id = curso_materia.materia_id INNER JOIN cursos on curso_materia.curso_id = cursos.id WHERE materias.id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();

        $alumnos = [];
        while ($alumno = $valoresDb->fetch_object(Curso::class)) {
            $alumnos[] = $alumno;
        }

        return $alumnos;
    }
    

}