<?php

require_once __DIR__ .'/../Model/Materia.php';

$id = $_GET['id'];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $tipo_materia_id = $_POST['tipo_materia_id'];

    $materia = Materia::getById($id);
    $materia->nombre = $nombre;
    $materia->tipo_materia_id = $tipo_materia_id;
    $materia->update();

    header('Location: ../indexMateria.php');
} else  {
    $materias = Materia::all();
    $materia = Materia::getById($id);
    if ($materia) {
        require_once __DIR__ .'/../Views/materias/editarMateria.view.php';
    }
}