<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Requests/Requests.php';

$nombre = "";
$apellido = "";
$fecha_nacimiento = "";
// $cursos_id = "";

$errores = [];
$errores_nombre = [];
$errores_apellido = [];
$errores_fecha_nacimiento = [];
$errores_cursos = [];

$cursos = Curso::all();

if(isset($_POST['enviarFormulario'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    // $cursos_id = $_POST['cursos_id'];

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
        $profesor = new Profesor();
        $profesor->nombre = $nombre;
        $profesor->apellido = $apellido;
        $profesor->fecha_nacimiento = $fecha_nacimiento;
        // $profesor->cursos_id = $cursos_id;
        $profesor->create();

        header('Location: indexProfesor.php?pagina=1');
    }


}

$materias = Materia::all();

require_once __DIR__ .'/../Views/profesores/createProfesor.view.php';