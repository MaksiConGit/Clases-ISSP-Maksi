<?php

require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Model/Materia.php';

$id = $_GET['id'];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materia_id = $_POST['materia_id'];

    $profesor = Profesor::getById($id);
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materia_id;
    $profesor->update();

    header('Location: ../Controllers/indexProfesor.php');
} else  {
    $materias = Materia::all();
    $profesor = Profesor::getById($id);
    if ($profesor) {
        require_once __DIR__ .'/../Views/profesores/editarProfesor.view.php';
    }
}


