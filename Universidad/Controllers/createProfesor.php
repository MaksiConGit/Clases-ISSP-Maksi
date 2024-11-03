<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Requests/Requests.php';

$nombre = "";
$apellido = "";
$materia_id = "";
$errores = [];

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materia_id = $_POST['materia_id'];

    $errores = array_merge(
        camposVacios([$nombre, $apellido, $materia_id]),
        maxMin(['nombre' => $nombre, 'apellido' => $apellido]),
        soloLetras(['nombre' => $nombre, 'apellido' => $apellido]),
    );

    if (empty($errores)) {
        $profesor = new Profesor();
        $profesor->nombre = $nombre;
        $profesor->apellido = $apellido;
        $profesor->materia_id = $materia_id;
        $profesor->create();

        header('Location: indexProfesor.php');
    }


}

$materias = Materia::all();

require_once __DIR__ .'/../Views/profesores/createProfesor.view.php';