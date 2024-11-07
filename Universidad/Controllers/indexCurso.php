<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/Profesor.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Model/Curso.php';

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];    
}
else{
    header("Location: indexCurso.php?pagina=1");
}

if (isset($_GET['año'])) {
    $año = $_GET['año'];
    
    if ($año <= 0) {
        header("Location: 404.php"); 
    }

    $año_seleccionado = $año;

}
else{
    $año = null;
    $año_seleccionado = null;
}

$paginas_cursos = Curso::allPaginado($año);

$cursos = Curso::all();


if ($pagina > (count($paginas_cursos)) or $pagina < 1) {
    header("Location: 404.php");
}

// if ($año) {
//     $cursos_ids = [];

//     foreach ($cursos as $curso) {
//         $cursos_ids[] = $curso->id;
//     }

//     if (!in_array($año, $cursos_ids)) {
//         header("Location: 404.php"); 
//     }
// }

require_once __DIR__ .'/../Views/cursos/indexCurso.view.php';