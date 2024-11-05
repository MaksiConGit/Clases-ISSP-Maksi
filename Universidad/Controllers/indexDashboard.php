<?php

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../Model/Alumno.php';
require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Model/Examen.php';
require_once __DIR__ .'/../Model/Nota.php';
require_once __DIR__ .'/../Model/Curso.php';



$alumnos = Alumno::all();
$profesores = Profesor::all();
$materias = Materia::all();
$tipos_materia = TipoMateria::all();
$examenes = Examen::all();
$notas = Nota::all();
$cursos = Curso::all();

$promedio_general_mes = Nota::promedioGeneralPorMes();
$alumnos_mes = Alumno::alumnosPorMes();
$profesores_mes = Profesor::profesoresPorMes();
$alumnos_f_promedio = Alumno::allFPromedio();


require_once __DIR__ .'/../Views/dashboard/index.php';