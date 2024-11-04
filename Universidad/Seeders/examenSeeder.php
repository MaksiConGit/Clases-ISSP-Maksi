<?php

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../Model/Examen.php';
require_once __DIR__ .'/../Model/Materia.php';

function examenSeeder(){
    $materias = Materia::all();
    $faker = Faker\Factory::create();
    $examen = new Examen;

    for ($i=0; $i < 5; $i++) { 
        $examen->numero = $faker->randomDigitNotNull();
        $examen->materia_id = $materias[$faker->numberBetween(0, count($materias)-1)]->id;
        $examen->created_at = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d H:i:s');
        $examen->updated_at = $faker->dateTimeBetween($examen->created_at, '2024-12-31')->format('Y-m-d H:i:s');

        $examen->create();
    }
}

examenSeeder();

header('Location: ../Controllers/indexDashboard.php');