<?php

require_once __DIR__ .'/../Model/Curso.php';

$id = $_GET['id'];

$curso = Curso::getById($id);

if ($curso) {
    $curso->delete();
    header('Location: indexCurso.php?pagina=1');
}