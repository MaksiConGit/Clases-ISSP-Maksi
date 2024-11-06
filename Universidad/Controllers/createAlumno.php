<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Requests/Requests.php';

$nombre = "";
$apellido = "";
$fecha_nacimiento = "";
$curso_id = "";

$cursos = Curso::all();

$errores = [];
$errores_nombre = [];
$errores_apellido = [];
$errores_fecha_nacimiento = [];
// $errores_cursos = [];


if(isset($_POST['enviarFormulario'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $curso_id = 1;

    $errores_nombre = array_merge(
        camposVacios([$nombre]),
        maxMin(['nombre' => $nombre]),
        soloLetras(['nombre' => $nombre]),
    );

    $errores_apellido = array_merge(
        camposVacios([$apellido]),
        maxMin(['apellido' => $apellido]),
        soloLetras(['apellido' => $apellido]),
    );

    $errores_fecha_nacimiento = array_merge(
        camposVacios([$fecha_nacimiento]),
        fechaAntesDeHoy([$fecha_nacimiento])
    );

    // $errores_cursos = array_merge(
    //     camposVacios([$cursos_id])
    // );

    $errores = array_merge(
        $errores_nombre, $errores_apellido, $errores_fecha_nacimiento
    );

    if (empty($errores)) {
        $alumno = new Alumno;
        $alumno->nombre = $nombre;
        $alumno->apellido = $apellido;
        $alumno->fecha_nacimiento = $fecha_nacimiento;
        $alumno->curso_id = $curso_id;
        $alumno->create();

        header('Location: indexAlumno.php?pagina=1');
    }
}


require_once __DIR__ .'/../Views/alumnos/createAlumno.view.php';