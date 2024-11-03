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
$examenes = Examen::all();
$notas = Nota::all();

$promedio_general_mes = Nota::promedioGeneralPorMes();

require_once __DIR__ .'/../Views/dist/index.php';