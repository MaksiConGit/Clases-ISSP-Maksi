<?php

require_once __DIR__ .'/../Model/Alumno.php';
require_once __DIR__ .'/../Model/Materia.php';

$materias = Materia::all();

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $materias_id = $_POST['materia_id'];

    $alumno = new Alumno();
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimiento;
    $alumno->materias_id = $materias_id;
    $alumno->create();

    header('Location: ../indexAlumno.php');
    
} else {
    echo "No se presionó el botón de enviar formulario";
}

require_once __DIR__ .'/../Views/alumnos/createAlumno.view.php';
