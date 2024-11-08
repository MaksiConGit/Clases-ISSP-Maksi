<?php

require_once 'Conexion.php';
require_once 'Alumno.php';
require_once 'Profesor.php';
date_default_timezone_set('America/Argentina/Buenos_Aires');


class Curso extends Conexion {

    public $id, $nombre, $division, $materias_id, $created_at, $updated_at;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO cursos (nombre, division, created_at, updated_at) VALUES (?, ?, ?, ?)");
        $pre->bind_param("isss", $this->nombre, $this->division, $this->created_at, $this->updated_at);
        $pre->execute();

        $this->id = mysqli_insert_id($this->con);

        foreach ($this->materias_id as $materia_id) {
            $pre = mysqli_prepare($this->con, "INSERT INTO curso_materia (curso_id, materia_id) VALUES (?, ?)");
            $pre->bind_param("ii", $this->id, $materia_id);
            $pre->execute();
        }

    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM cursos");
        $result->execute();
        $valoresDb = $result->get_result();
        $cursos = [];
        while ($curso = $valoresDb->fetch_object(Curso::class)) {
            $cursos[] = $curso;
        }
        return $cursos;
    }

    public static function truncate() {
        $conexion = new Conexion();
        $conexion->conectar();
        mysqli_query($conexion->con, "SET FOREIGN_KEY_CHECKS = 0");

        $result = mysqli_prepare($conexion->con, "TRUNCATE TABLE issp.curso_materia");
        $result->execute();

        $result = mysqli_prepare($conexion->con, "TRUNCATE TABLE issp.cursos");
        $result->execute();

        mysqli_query($conexion->con, "SET FOREIGN_KEY_CHECKS = 1");
    }

    public static function getById($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM cursos WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $curso = $valorDb->fetch_object(Curso::class);
        return $curso;
    }

    public function materias() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT materias.* FROM materias INNER JOIN curso_materia ON curso_materia.materia_id = materias.id INNER JOIN cursos ON curso_materia.curso_id = cursos.id WHERE curso_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        $valoresDb = $pre->get_result();

        $materias = [];
        while ($materia = $valoresDb->fetch_object(Materia::class)) {
            $materias[] = $materia;
        }

        return $materias;

    }

    public static function años(){
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT nombre FROM cursos GROUP BY nombre ORDER BY nombre ASC");
        $result->execute();
        $valoresDb = $result->get_result();
        $años = [];
        while ($fila = $valoresDb->fetch_assoc()) {
            $años[] = $fila['nombre'];
        }
        return $años;
    }


    public static function allPaginado($año) {
        $conexion = new Conexion();
        $conexion->conectar();

        $paginas = [];

        if ($año) {

            $result = mysqli_prepare($conexion->con, "SELECT COUNT(*) AS total FROM cursos WHERE nombre = $año ORDER BY nombre ASC");
            $result->execute();
            $valoresDb = $result->get_result();
            $fila = $valoresDb->fetch_assoc();
            $cantidad_cursos = $fila['total'];

        }
        else{

            $result = mysqli_prepare($conexion->con, "SELECT COUNT(*) AS total FROM cursos ORDER BY nombre ASC");
            $result->execute();
            $valoresDb = $result->get_result();
            $fila = $valoresDb->fetch_assoc();
            $cantidad_cursos = $fila['total'];

        }

        $cantidad_paginas = ceil($cantidad_cursos / 9);


        for ($i=0; $i < $cantidad_paginas; $i++) { 

            $offset_value = 9 * $i;

            if ($año) {
                $result = mysqli_prepare($conexion->con, "SELECT cursos.* FROM cursos WHERE nombre = $año ORDER BY nombre ASC LIMIT 9 OFFSET $offset_value");
            }
            else{
                $result = mysqli_prepare($conexion->con, "SELECT cursos.* FROM cursos ORDER BY cursos.nombre ASC LIMIT 9 OFFSET $offset_value");
            }

            $result->execute();
            $valoresDb = $result->get_result();
    
            $cursos = [];
            while ($curso = $valoresDb->fetch_object(Curso::class)) {
                $cursos[] = $curso;
            }

            $paginas[] = $cursos;
        }
        

        return $paginas;
    }


    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE cursos SET nombre = ?, division = ?, updated_at = ? WHERE id = ?");
        $this->updated_at = date('Y-m-d H:i:s');
        $pre->bind_param("issi", $this->nombre, $this->division, $this->updated_at, $this->id);
        $pre->execute();
    
        $pre = mysqli_prepare($this->con, "DELETE FROM curso_materia WHERE curso_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    
        foreach ($this->materias_id as $materia_id) {
            $pre = mysqli_prepare($this->con, "INSERT INTO curso_materia (curso_id, materia_id) VALUES (?, ?)");
            $pre->bind_param("ii", $this->id, $materia_id);
            $pre->execute();
        }
    }

    public function delete() {

        $this->conectar();
        mysqli_query($this->con, "SET FOREIGN_KEY_CHECKS = 0");
        $pre = mysqli_prepare($this->con, "DELETE FROM curso_materia WHERE curso_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();

        $pre = mysqli_prepare($this->con, "DELETE FROM cursos WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        mysqli_query($this->con, "SET FOREIGN_KEY_CHECKS = 1");
        
    }


    // public function profesores() {
    //     $this->conectar();
    //     $result = mysqli_prepare($this->con, "SELECT * FROM profesores WHERE materia_id = ?");
    //     $result->bind_param("i", $this->id);
    //     $result->execute();
    //     $valoresDb = $result->get_result();

    //     $profesores = [];
        
    //     while ($profesor = $valoresDb->fetch_object(Profesor::class)) {
    //         $profesores[] = $profesor;
    //     }
    //     return $profesores;
    // }

    // public function alumnos() {
    //     $this->conectar();
    //     $result = mysqli_prepare($this->con, "SELECT alumnos.* FROM alumnos INNER JOIN alumno_materia ON alumnos.id = alumno_materia.alumno_id WHERE alumno_materia.materia_id = ?");
    //     $result->bind_param("i", $this->id);
    //     $result->execute();
    //     $valoresDb = $result->get_result();

    //     $alumnos = [];
    //     while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
    //         $alumnos[] = $alumno;
    //     }

    //     return $alumnos;
    // }

    // public function delete() {
    //     $this->conectar();
    //     $pre = mysqli_prepare($this->con, "DELETE FROM materias WHERE id = ?");
    //     $pre->bind_param("i", $this->id);
    //     $pre->execute();
    // }

    // public function update() {
    //     $this->conectar();
    //     $pre = mysqli_prepare($this->con, "UPDATE materias SET nombre = ?, tipo_materia_id = ? WHERE id = ?");
    //     $pre->bind_param("sii", $this->nombre, $this->tipo_materia_id, $this->id);
    //     $pre->execute();
    // }

    // public static function alumno_materia($id) {
    //     $conexion = new Conexion();
    //     $conexion->conectar();
    //     $result = mysqli_prepare($conexion->con, "SELECT materia_id FROM alumno_materia WHERE id = $id");
    //     $result->execute();
    //     return $result->get_result();
         
    // }

    // public function tipoMateria() {
    //     $this->conectar();
        
    //     $result = mysqli_prepare($this->con, "SELECT tipos_materias.tipo_materia FROM tipos_materias INNER JOIN materias ON materias.tipo_materia_id = tipos_materias.id WHERE materias.id = ?");
    //     $result->bind_param("i", $this->id);
    //     $result->execute();
    //     $valoresDb = $result->get_result();
    //         $tipo_materia = $valoresDb->fetch_object();
    //     return $tipo_materia ? $tipo_materia->tipo_materia : null;
    // }
    

}