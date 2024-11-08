<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Model/Curso.php';

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];    
}
else{
    header("Location: indexMateria.php?pagina=1");
}

if (isset($_GET['curso_id'])) {
    $curso_id = $_GET['curso_id'];
    $curso_seleccionado = Curso::getById($curso_id);
}
else{
    $curso_id = null;
    $curso_seleccionado = null;
}

$paginas_materias = Materia::allPaginado($curso_id);
$profesores = Profesor::all();
$tipos_materia = TipoMateria::all();
$cursos = Curso::all();

if ($pagina > (count($paginas_materias)) or $pagina < 1) {
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



require_once __DIR__ .'/../Views/materias/indexMateria.view.php';