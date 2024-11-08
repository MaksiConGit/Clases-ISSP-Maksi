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
$errores_nombre = [];
$errores_tipo_materia = [];


if(isset($_POST['actualizarDatos'])){

    $nombre = $_POST['nombre'];
    $tipo_materia_id = $_POST['tipo_materia_id'] ?? null;

    $errores_nombre = array_merge(
        camposVacios([$nombre]),
        maxMin(['nombre' => $nombre]),
        soloLetras(['nombre' => $nombre]),
    );

    $errores_tipo_materia = array_merge(
        camposVacios([$tipo_materia_id])
    );

    $errores = array_merge(
        $errores_nombre, $errores_tipo_materia
    );

    if (empty($errores)) {
        $materia = Materia::getById($id);
        $materia->nombre = $nombre;
        $materia->tipo_materia_id = $tipo_materia_id;
        $materia->update();

        header('Location: indexMateria.php?pagina=1');
    }
}


if ($materia) {
    require_once __DIR__ .'/../Views/materias/editarMateria.view.php';
}
