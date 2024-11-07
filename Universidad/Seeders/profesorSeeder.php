<?php

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Model/Curso.php';

function profesorSeeder(){
    $cursos = Curso::all();
    $faker = Faker\Factory::create();
    $profesor = new Profesor;

    for ($i=0; $i < 5; $i++) { 
        $profesor->nombre = $faker->name();
        $profesor->apellido = $faker->lastName();
        $profesor->fecha_nacimiento = $faker->dateTimeBetween('-50 years', '-16 years')->format('Y-m-d');

        $profesor->materias_id = [];

        for ($j = 0; $j <= $faker->numberBetween(1, count($cursos) - 1); $j++) { 
            do {
                $curso_id = $cursos[$faker->numberBetween(0, count($cursos) - 1)]->id;
            } while (in_array($curso_id, $profesor->materias_id));
        
            $profesor->materias_id[] = $curso_id;
        }

        $profesor->created_at = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d H:i:s');
        $profesor->updated_at = null;

        $profesor->create();
    }
}

profesorSeeder();

header('Location: ../Controllers/indexDashboard.php');