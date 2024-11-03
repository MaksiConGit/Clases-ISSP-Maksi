<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Requests/Requests.php';

$id = $_GET['id'];
$materia = Materia::getById($id);

$nombre = $materia->nombre;
$tipo_materia_id = $materia->tipo_materia_id;

$materias = Materia::all();
$tipos_materias = TipoMateria::all();
$errores = [];


if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $tipo_materia_id = $_POST['tipo_materia_id'];

    $errores = array_merge(
        camposVacios([$nombre, $tipo_materia_id]),
        maxMin(['nombre' => $nombre]),
        soloLetras(['nombre' => $nombre]),
    );

    if (empty($errores)) {
        $materia = Materia::getById($id);
        $materia->nombre = $nombre;
        $materia->tipo_materia_id = $tipo_materia_id;
        $materia->update();

        header('Location: indexMateria.php');
    }
}


if ($materia) {
    require_once __DIR__ .'/../Views/materias/editarMateria.view.php';
}
