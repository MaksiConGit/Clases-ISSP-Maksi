<?php

require_once __DIR__ .'/../Model/Alumno.php';
require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Model/Examen.php';
require_once __DIR__ .'/../Model/Nota.php';

$alumnos = Alumno::all();
$profesores = Profesor::all();
$materias = Materia::all();
$tipos_materia = TipoMateria::all();
$tipos_materia = Examen::all();
$tipos_materia = Nota::all();
$examenes = [1,5,7,34];
$notas = [1,5,7,34];

require_once __DIR__ .'/../Views/dist/index.php';