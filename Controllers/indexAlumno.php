<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/Alumno.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Model/Curso.php';

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];    
}
else{
    header("Location: indexAlumno.php?pagina=1");
}

if (isset($_GET['curso_id'])) {
    $curso_id = $_GET['curso_id'];
    
    if ($curso_id <= 0) {
        header("Location: 404.php"); 
    }

    $curso_seleccionado = Curso::getById($curso_id);
}
else{
    $curso_id = null;
    $curso_seleccionado = null;
}

$paginas_alumnos = Alumno::allPaginado($curso_id);


$cursos = Curso::all();


if ($pagina > (count($paginas_alumnos)) or $pagina < 1) {
    header("Location: 404.php");
}

if ($curso_id) {
    $cursos_ids = [];

    foreach ($cursos as $curso) {
        $cursos_ids[] = $curso->id;
    }

    if (!in_array($curso_id, $cursos_ids)) {
        header("Location: 404.php"); 
    }
}

require_once __DIR__ .'/../Views/alumnos/indexAlumno.view.php';