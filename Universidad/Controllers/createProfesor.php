<?php

require_once __DIR__ .'/../Model/Materia.php';

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materia_id = $_POST['materia_id'];

    $profesor = new Profesor();
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materia_id;
    $profesor->create();

    header('Location: ../indexProfesor.php');

} else {
    echo "No se presionó el botón de enviar formulario";
}

$materias = Materia::all();

require_once __DIR__ .'/../Views/profesores/createProfesor.view.php';