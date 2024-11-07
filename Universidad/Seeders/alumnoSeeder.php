<?php

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../Model/Alumno.php';
require_once __DIR__ .'/../Model/Curso.php';

function alumnoSeeder(){

    $cursos = Curso::all();
    $faker = Faker\Factory::create();
    $alumno = new Alumno;

    for ($i=0; $i < 10; $i++) { 
        $alumno->nombre = $faker->name();
        $alumno->apellido = $faker->lastName();
        $alumno->fecha_nacimiento = $faker->dateTimeBetween('-50 years', '-16 years')->format('Y-m-d');
        $alumno->curso_id = $cursos[$faker->numberBetween(0, count($cursos)-1)]->id;
        $alumno->created_at = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d H:i:s');
        $alumno->updated_at = null;
    
        $alumno->create();
    }
}

alumnoSeeder();

header('Location: ../Controllers/indexDashboard.php');