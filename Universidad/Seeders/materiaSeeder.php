<?php

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';

function materiaSeeder(){
    $tipos_materias = TipoMateria::all();
    $faker = Faker\Factory::create();
    $materia = new Materia;

    for ($i=0; $i < 9; $i++) { 
        $materia->nombre = $faker->word();
        $materia->tipo_materia_id = $tipos_materias[$faker->numberBetween(0, count($tipos_materias)-1)]->id;
        $materia->created_at = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d H:i:s');
        $materia->updated_at = null;

        $materia->create();
    }
}

materiaSeeder();

header('Location: ../Controllers/indexDashboard.php');