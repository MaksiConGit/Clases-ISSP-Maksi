<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Alumno extends Conexion {

    public $id, $nombre, $apellido, $fecha_nacimiento, $curso_id, $created_at, $updated_at, $materias_id;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, curso_id, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)");
        $pre->bind_param("sssiss", $this->nombre, $this->apellido, $this->fecha_nacimiento, $this->curso_id, $this->created_at, $this->updated_at);
        $pre->execute();

        $alumno_id = mysqli_insert_id($this->con);

        // foreach ($this->materias_id as $materia_id) {
        //     $pre = mysqli_prepare($this->con, "INSERT INTO alumno_materia (alumno_id, materia_id) VALUES (?, ?)");
        //     $pre->bind_param("ii", $alumno_id, $materia_id);
        //     $pre->execute();
        // }

    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos");
        $result->execute();
        $valoresDb = $result->get_result();
        $alumnos = [];
        while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
            $alumnos[] = $alumno;
        }
        return $alumnos;
    }

    public static function allPaginado($curso_id) {
        $conexion = new Conexion();
        $conexion->conectar();

        $paginas = [];

        if ($curso_id) {

            // $result = mysqli_prepare($conexion->con, "SELECT COUNT(*) AS total FROM profesores INNER JOIN curso_profesor ON profesores.id = curso_profesor.profesor_id INNER JOIN cursos ON curso_profesor.profesor_id = profesores.id WHERE profesores.id = 1 ORDER BY profesores.nombre ASC");
            // $result->execute();
            // $valoresDb = $result->get_result();
            // $fila = $valoresDb->fetch_assoc();
            // $cantidad_profesores = $fila['total'];

        }
        else{

            $result = mysqli_prepare($conexion->con, "SELECT COUNT(*) AS total FROM alumnos ORDER BY nombre ASC");
            $result->execute();
            $valoresDb = $result->get_result();
            $fila = $valoresDb->fetch_assoc();
            $cantidad_alumnos = $fila['total'];

        }

        $cantidad_paginas = ceil($cantidad_alumnos / 9);


        for ($i=0; $i < $cantidad_paginas; $i++) { 

            $offset_value = 9 * $i;

            if ($curso_id) {
                // $result = mysqli_prepare($conexion->con, "SELECT profesores.* FROM profesores INNER JOIN curso_profesor ON profesores.id = curso_profesor.profesor_id INNER JOIN cursos ON curso_profesor.profesor_id = profesores.id WHERE cursos.id = $curso_id ORDER BY profesores.nombre ASC LIMIT 9 OFFSET $offset_value");
            }
            else{
                $result = mysqli_prepare($conexion->con, "SELECT alumnos.* FROM alumnos ORDER BY alumnos.nombre ASC LIMIT 9 OFFSET $offset_value");
            }

            $result->execute();
            $valoresDb = $result->get_result();
    
            $alumnos = [];
            while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
                $alumnos[] = $alumno;
            }

            $paginas[] = $alumnos;
        }
        

        return $paginas;
    }

    public static function getById($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $alumno = $valorDb->fetch_object(Alumno::class);
        return $alumno;
    }

    public function delete() {

        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM alumno_materia WHERE alumno_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();

        $pre = mysqli_prepare($this->con, "DELETE FROM alumnos WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET nombre = ?, apellido = ?, fecha_nacimiento = ? WHERE id = ?");
        $pre->bind_param("sssi", $this->nombre, $this->apellido, $this->fecha_nacimiento, $this->id);
        $pre->execute();
    
        // $materias_actuales = [];
        // $result = mysqli_query($this->con, "SELECT materia_id FROM alumno_materia WHERE alumno_id = $this->id");
        // while ($row = mysqli_fetch_assoc($result)) {
        //     $materias_actuales[] = $row['materia_id'];
        // }
    
        // foreach ($this->materias_id as $materia_id) {
        //     if (!in_array($materia_id, $materias_actuales)) {
        //         $pre = mysqli_prepare($this->con, "INSERT INTO alumno_materia (alumno_id, materia_id) VALUES (?, ?)");
        //         $pre->bind_param("ii", $this->id, $materia_id);
        //         $pre->execute();
        //     }
        // }
    
        // foreach ($materias_actuales as $materia_id_actual) {
        //     if (!in_array($materia_id_actual, $this->materias_id)) {
        //         $pre = mysqli_prepare($this->con, "DELETE FROM alumno_materia WHERE alumno_id = ? AND materia_id = ?");
        //         $pre->bind_param("ii", $this->id, $materia_id_actual);
        //         $pre->execute();
        //     }
        // }
    }

    public function materias() {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT materias.* FROM materias INNER JOIN alumno_materia ON materias.id = alumno_materia.materia_id WHERE alumno_materia.alumno_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();

        $materias = [];
        while ($materia = $valoresDb->fetch_object(Materia::class)) {
            $materias[] = $materia;
        }
        return $materias;
    }

    public static function alumno_materia($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT materia.nombre FROM materias INNER JOIN alumno_materia ON materias_id = alumno_materia.materia_id WHERE alumno_id = $id");
        $result->execute();
        return $result->get_result();
         
    }

    public function edad(){        
        $fechaNacimiento = new DateTime($this->fecha_nacimiento);
        $fechaActual = new DateTime();
        $edad = $fechaActual->diff($fechaNacimiento)->y;
        return $edad;
    }

    public function ultimaVezEditado(){        
        $fecha_ultima_edicion = new DateTime($this->updated_at);
        $fechaActual = new DateTime(); 

        // print_r($fechaActual->diff($fecha_ultima_edicion));

        $ultima_edicion[0] = $fechaActual->diff($fecha_ultima_edicion)->y;
        $ultima_edicion[1] = $fechaActual->diff($fecha_ultima_edicion)->m;
        $ultima_edicion[2] = $fechaActual->diff($fecha_ultima_edicion)->d;
        $ultima_edicion[3] = $fechaActual->diff($fecha_ultima_edicion)->h;
        $ultima_edicion[4] = $fechaActual->diff($fecha_ultima_edicion)->i;

        

        return $ultima_edicion;
    }

    public static function alumnosPorMes() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT MONTH(created_at) AS mes, COUNT(id) AS CantidadAlumnos FROM alumnos GROUP BY mes");
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
            $cantidad = (int) $row['CantidadAlumnos'];
            $datos[$mes]['cantidad'] = $cantidad;
        }

        return array_values($datos);
    }

    public function promedio(){
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT ROUND(AVG(numero), 2) AS Promedio FROM notas WHERE alumno_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();
        $row = $valoresDb->fetch_assoc();
        return $row['Promedio'];
    }

    public static function allFPromedio() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT alumnos.* FROM alumnos INNER JOIN notas on notas.alumno_id = alumnos.id GROUP BY alumnos.id ORDER BY ROUND(AVG(notas.numero), 2) DESC;");
        $result->execute();
        $valoresDb = $result->get_result();
        $alumnos = [];
        while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
            $alumnos[] = $alumno;
        }
        return $alumnos;
    }

    public function curso(){
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT cursos.* FROM alumnos INNER JOIN cursos on alumnos.curso_id = cursos.id WHERE alumnos.id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();
        $curso = $valoresDb->fetch_object(Curso::class);
        return $curso;
    }

    public static function truncate() {
        $conexion = new Conexion();
        $conexion->conectar();
        mysqli_query($conexion->con, "SET FOREIGN_KEY_CHECKS = 0");
        $result = mysqli_prepare($conexion->con, "TRUNCATE TABLE issp.alumnos");
        $result->execute();
        mysqli_query($conexion->con, "SET FOREIGN_KEY_CHECKS = 1");
    }


}