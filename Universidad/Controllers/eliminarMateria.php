<?php

require_once __DIR__ .'/../Model/Materia.php';

$id = $_GET['id'];

$materia = Materia::getById($id);

if ($materia) {
    $materia->delete();
    header('Location: indexMateria.php');
}