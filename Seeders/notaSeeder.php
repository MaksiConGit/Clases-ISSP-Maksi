<?php

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../Model/Nota.php';
require_once __DIR__ .'/../Model/Examen.php';
require_once __DIR__ .'/../Model/Alumno.php';

function notaSeeder(){
    $examenes = Examen::all();
    $alumnos = Alumno::all();
    $faker = Faker\Factory::create();
    $nota = new Nota;

    for ($i=0; $i < 10; $i++) { 
        $nota->examen_id = $examenes[$faker->numberBetween(0, count($examenes)-1)]->id;
        $nota->alumno_id = $alumnos[$faker->numberBetween(0, count($alumnos)-1)]->id;
        $nota->numero = $faker->randomFloat(2, 1, 10);
        $nota->created_at = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d H:i:s');
        $nota->updated_at = $faker->dateTimeBetween($nota->created_at, '2024-12-31')->format('Y-m-d H:i:s');

        $nota->create();
    }
}

notaSeeder();

header('Location: ../Controllers/indexDashboard.php');