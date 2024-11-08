<?php

require_once __DIR__ .'/../Model/Nota.php';
require_once __DIR__ .'/../Model/Examen.php';
require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/Curso.php';
require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Model/Alumno.php';

Nota::truncate();
Examen::truncate();
Materia::truncate();
Curso::truncate();
Profesor::truncate();
Alumno::truncate();

header('Location: ../Controllers/indexDashboard.php');