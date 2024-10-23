<?php

require_once __DIR__ .'/../Model/Profesor.php';

$profesores = Profesor::all();
$materias = Materia::all();

require_once __DIR__ .'/../Views/profesores/indexProfesor.view.php';
