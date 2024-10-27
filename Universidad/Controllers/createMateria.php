<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';

$tipos_materias = TipoMateria::all();

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $tipo_materia_id = $_POST['tipo_materia_id'];

    $materia = new Materia();
    $materia->nombre = $nombre;
    $materia->tipo_materia_id = $tipo_materia_id;

    $materia->create();

    header('Location: ../indexMateria.php');
}

require_once __DIR__ .'/../Views/materias/createMateria.view.php';