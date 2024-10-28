<?php

require_once __DIR__ .'/../Model/Alumno.php';
require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Requests/Requests.php';

$id = $_GET['id'];
$alumno = Alumno::getById($id);

$nombre = $alumno->nombre;
$apellido = $alumno->apellido;
$fecha_nacimiento = $alumno->fecha_nacimiento;

$materias = Materia::all();
$errores = [];


if(isset($_POST['actualizarDatos'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $materias_id = $_POST['materia_id'] ?? null;

    $errores = array_merge(
        camposVacios([$nombre, $apellido, $fecha_nacimiento]),
        maxMin(['nombre' => $nombre, 'apellido' => $apellido]),
        soloLetras(['nombre' => $nombre, 'apellido' => $apellido]),
        fechaAntesDeHoy([$fecha_nacimiento])
    );

    if (empty($errores)) {
        $alumno = Alumno::getById($id);
        $alumno->nombre = $nombre;
        $alumno->apellido = $apellido;
        $alumno->fecha_nacimiento = $fecha_nacimiento;
        $alumno->materias_id = $materias_id;
        $alumno->update();
    
        header('Location: ../indexAlumno.php');
    }


}

if ($alumno) {
    require_once __DIR__ .'/../Views/alumnos/editarAlumno.view.php';
}