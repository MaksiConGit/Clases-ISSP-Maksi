<?php

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../Model/Curso.php';
require_once __DIR__ .'/../Model/Materia.php';

function cursoSeeder(){
    $materias = Materia::all();
    $faker = Faker\Factory::create();
    $curso = new Curso;

    for ($i=0; $i < 2; $i++) { 
        $curso->nombre = $faker->randomLetter();
        $curso->division = $faker->randomDigitNotNull();

        for ($j=0; $j <= ($faker->numberBetween(1, count($materias)-1)); $j++) { 
            $curso->materias_id[] = $materias[$faker->numberBetween(0, count($materias)-1)]->id;
        }

        $curso->created_at = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d H:i:s');
        $curso->updated_at = $faker->dateTimeBetween($curso->created_at, '2024-12-31')->format('Y-m-d H:i:s');

        $curso->create();
    }
}

cursoSeeder();

header('Location: ../Controllers/indexDashboard.php');