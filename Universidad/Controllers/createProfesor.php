<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Requests/Requests.php';

$nombre = "";
$apellido = "";
$fecha_nacimiento = "";
$materias_id = [];

$errores = [];
$errores_nombre = [];
$errores_apellido = [];
$errores_fecha_nacimiento = [];
$errores_materias = [];

$cursos = Curso::all();

if(isset($_POST['enviarFormulario'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $materias_id = $_POST['materias_id'] ?? null;

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

    $errores_materias = array_merge(
        camposVacios([$materias_id])
    );

    $errores = array_merge(
        $errores_nombre, $errores_apellido, $errores_fecha_nacimiento, $errores_materias
    );

    if (empty($errores)) {
        $profesor = new Profesor();
        $profesor->nombre = $nombre;
        $profesor->apellido = $apellido;
        $profesor->fecha_nacimiento = $fecha_nacimiento;
        $profesor->materias_id = $materias_id;
        $profesor->create();

        header('Location: indexProfesor.php?pagina=1');
    }


}

$materias = Materia::all();

require_once __DIR__ .'/../Views/profesores/createProfesor.view.php';