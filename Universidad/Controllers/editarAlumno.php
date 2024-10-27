<?php

require_once __DIR__ .'/../Model/Alumno.php';

$id = $_GET['id'];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $materias_id = $_POST['materia_id'];

    $alumno = Alumno::getById($id);
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimiento;
    $alumno->materias_id = $materias_id;
    $alumno->update();

    header('Location: ../indexAlumno.php');
} else  {
    $alumno = Alumno::getById($id);
    $materias = Materia::all();
    if ($alumno) {
        require_once __DIR__ .'/../Views/alumnos/editarAlumno.view.php';
    }
}
