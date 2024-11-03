<?php

require_once __DIR__ .'/../Model/Profesor.php';

$id = $_GET['id'];

$profesor = Profesor::getById($id);

if ($profesor) {
    $profesor->delete();
    header('Location: indexProfesor.php');
}


echo $id;