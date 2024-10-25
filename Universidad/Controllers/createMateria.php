<?php

require_once __DIR__ .'/../Model/Materia.php';

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $tipo_materia_id = $_POST['tipo_materia_id'];

    $materia = new Materia();
    $materia->nombre = $nombre;
    $materia->tipo_materia_id = $tipo_materia_id;

    $materia->create();

    header('Location: ../indexMateria.php');

} else {
    echo "No se presionó el botón de enviar formulario";
}

require_once __DIR__ .'/../Views/materias/createMateria.view.php';