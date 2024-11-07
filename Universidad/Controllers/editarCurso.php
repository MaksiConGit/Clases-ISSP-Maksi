<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Requests/Requests.php';

$id = $_GET['id'];
$curso = Curso::getById($id);

$nombre = $curso->nombre;
$division = $curso->division;
$materias_id = [];

foreach ($curso->materias() as $materia) {
    $materias_id[] = $materia->id;
}

$materias = Materia::all();

$errores = [];
$errores_nombre = [];
$errores_division = [];
$errores_materias = [];


if(isset($_POST['actualizarDatos'])){

    $nombre = $_POST['nombre'];
    $division = $_POST['division'];
    $materias_id = $_POST['materias_id'] ?? null;

    $errores_nombre = array_merge(
        camposVacios([$nombre])
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
        $curso = Curso::getById($id);
        $curso->nombre = $nombre;
        $curso->division = $division;
        $curso->materias_id = $materias_id;
        $curso->update();

        header('Location: indexCurso.php?pagina=1');
    }
}


if ($curso) {
    require_once __DIR__ .'/../Views/cursos/editarCurso.view.php';
}
