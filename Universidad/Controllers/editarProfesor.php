<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Requests/Requests.php';

$id = $_GET['id'];
$profesor = Profesor::getById($id);

$nombre = $profesor->nombre;
$apellido = $profesor->apellido;
$materia_id = $profesor->materia_id;

$materias = Materia::all();

$errores = [];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materia_id = $_POST['materia_id'];

    $errores = array_merge(
        camposVacios([$nombre, $apellido, $materia_id]),
        maxMin(['nombre' => $nombre, 'apellido' => $apellido]),
        soloLetras(['nombre' => $nombre, 'apellido' => $apellido]),
    );

    if (empty($errores)) {
        $profesor = Profesor::getById($id);
        $profesor->nombre = $nombre;
        $profesor->materia_id = $materia_id;
        $profesor->update();

        header('Location: ../indexProfesor.php');
    }
}

if ($profesor) {
    require_once __DIR__ .'/../Views/profesores/editarProfesor.view.php';
}



