<?php

require_once __DIR__ .'/../Model/Materia.php';

$id = $_GET['id'];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materia_id = $_POST['materia_id'];

    $materia = Materia::getById($id);
    $materia->nombre = $nombre;
    $materia->materia_id = $materia_id;
    $materia->update();

    header('Location: ../Controllers/indexMateria.php');
} else  {
    $materia = Materia::getById($id);
    if ($materia) {
        require_once __DIR__ .'/../Views/profesores/editarMateria.view.php';
    }
}


