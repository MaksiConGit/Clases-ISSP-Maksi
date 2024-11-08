<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Requests/Requests.php';

$nombre = "";
$tipo_materia_id = "";
$errores = [];
$errores = [];
$errores_nombre = [];
$errores_tipo_materia = [];

$tipos_materias = TipoMateria::all();

if(isset($_POST['enviarFormulario'])){
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
        $materia = new Materia();
        $materia->nombre = $nombre;
        $materia->tipo_materia_id = $tipo_materia_id;

        $materia->create();

        header('Location: indexMateria.php?pagina=1');
    }
}

require_once __DIR__ .'/../Views/materias/createMateria.view.php';