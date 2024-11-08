<?php

require_once __DIR__ .'/materiaSeeder.php';
require_once __DIR__ .'/cursoSeeder.php';
require_once __DIR__ .'/alumnoSeeder.php';
require_once __DIR__ .'/profesorSeeder.php';
require_once __DIR__ .'/examenSeeder.php';
require_once __DIR__ .'/notaSeeder.php';

materiaSeeder();
cursoSeeder();
alumnoSeeder();
profesorSeeder();
examenSeeder();
notaSeeder();

header('Location: ../Controllers/indexDashboard.php');