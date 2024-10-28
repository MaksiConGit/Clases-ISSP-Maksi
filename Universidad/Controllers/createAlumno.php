<?php

require_once __DIR__ .'/../Model/Alumno.php';
require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Requests/Requests.php';

$nombre = "";
$apellido = "";
$fecha_nacimiento = "";
$materias_id = "";

$materias = Materia::all();

if(isset($_POST['enviarFormulario'])){

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

        $alumno = new Alumno();
        $alumno->nombre = $nombre;
        $alumno->apellido = $apellido;
        $alumno->fecha_nacimiento = $fecha_nacimiento;
        $alumno->materias_id = $materias_id;
        $alumno->create();
    
        header('Location: ../indexAlumno.php');

    }

}

require_once __DIR__ .'/../Views/alumnos/createAlumno.view.php';