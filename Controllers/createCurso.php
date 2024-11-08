<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Requests/Requests.php';


$nombre = "";
$division = "";
$materias_id = [];


$errores = [];
$errores_nombre = [];
$errores_division = [];
$errores_materias = [];

$materias = Materia::all();
$cursos = Curso::all();


if(isset($_POST['enviarFormulario'])){

    $nombre = $_POST['nombre'];
    $division = $_POST['division'];
    $materias_id = $_POST['materias_id'] ?? null;

    $errores_nombre = array_merge(
        camposVacios([$nombre]),
        soloNumeros(['nombre' => $nombre]),
        maxMin1(['nombre' => $nombre]),
    );

    $errores_division = array_merge(
        camposVacios([$division]),
        soloLetras(['división' => $division]),
    );

    $errores_materias = array_merge(
        camposVacios([$materias_id]),
    );

    $errores = array_merge(
        $errores_nombre, $errores_division, $errores_materias
    );

    if (empty($errores)) {
        $curso = new Curso;
        $curso->nombre = $nombre;
        $curso->division = $division;
        $curso->materias_id = $materias_id;
        $curso->create();

        header('Location: indexCurso.php?pagina=1');
    }


}

$materias = Materia::all();

require_once __DIR__ .'/../Views/cursos/createCurso.view.php';