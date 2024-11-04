<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Alumno extends Conexion {

    public $id, $nombre, $apellido, $fecha_nacimiento, $curso_id, $created_at, $updated_at, $materias_id;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumnos (nombre, apellido, fecha_nacimiento) VALUES (?, ?, ?)");
        $pre->bind_param("sss", $this->nombre, $this->apellido, $this->fecha_nacimiento);
        $pre->execute();

        $alumno_id = mysqli_insert_id($this->con);

        foreach ($this->materias_id as $materia_id) {
            $pre = mysqli_prepare($this->con, "INSERT INTO alumno_materia (alumno_id, materia_id) VALUES (?, ?)");
            $pre->bind_param("ii", $alumno_id, $materia_id);
            $pre->execute();
        }

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
    
        // Obtener las materias actuales del alumno en un array
        $materias_actuales = [];
        $result = mysqli_query($this->con, "SELECT materia_id FROM alumno_materia WHERE alumno_id = $this->id");
        while ($row = mysqli_fetch_assoc($result)) {
            $materias_actuales[] = $row['materia_id'];
        }
    
        // Recorrer las materias seleccionadas para agregar las nuevas y mantener las existentes
        foreach ($this->materias_id as $materia_id) {
            if (!in_array($materia_id, $materias_actuales)) {
                $pre = mysqli_prepare($this->con, "INSERT INTO alumno_materia (alumno_id, materia_id) VALUES (?, ?)");
                $pre->bind_param("ii", $this->id, $materia_id);
                $pre->execute();
            }
        }
    
        // Eliminar las materias que ya no están seleccionadas
        foreach ($materias_actuales as $materia_id_actual) {
            if (!in_array($materia_id_actual, $this->materias_id)) {
                $pre = mysqli_prepare($this->con, "DELETE FROM alumno_materia WHERE alumno_id = ? AND materia_id = ?");
                $pre->bind_param("ii", $this->id, $materia_id_actual);
                $pre->execute();
            }
        }
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

}