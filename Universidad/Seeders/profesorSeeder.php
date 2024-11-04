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

        for ($j=0; $j <= ($faker->numberBetween(1, count($cursos)-1)); $j++) { 
            $profesor->cursos_id[] = $cursos[$faker->numberBetween(0, count($cursos)-1)]->id;
        }

        $profesor->created_at = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d H:i:s');
        $profesor->updated_at = $faker->dateTimeBetween($profesor->created_at, '2024-12-31')->format('Y-m-d H:i:s');

        $profesor->create();
    }
}

profesorSeeder();

header('Location: ../Controllers/indexDashboard.php');