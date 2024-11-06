<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Requests/Requests.php';

$id = $_GET['id'];
$profesor = Profesor::getById($id);

$nombre = $profesor->nombre;
$apellido = $profesor->apellido;
$fecha_nacimiento = $profesor->fecha_nacimiento;
$cursos_id = $profesor->cursos_id;

$materias = Materia::all();
$cursos = Curso::all();

$errores = [];
$errores_nombre = [];
$errores_apellido = [];
$errores_fecha_nacimiento = [];
$errores_cursos = [];


if(isset($_POST['actualizarDatos'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $cursos_id = $_POST['cursos_id'];

    $errores_nombre = array_merge(
        camposVacios([$nombre]),
        maxMin(['nombre' => $nombre]),
        soloLetras(['nombre' => $nombre]),
    );

    $errores_apellido = array_merge(
        camposVacios([$apellido]),
        maxMin(['apellido' => $apellido]),
        soloLetras(['apellido' => $apellido]),
    );

    $errores_fecha_nacimiento = array_merge(
        camposVacios([$fecha_nacimiento]),
        fechaAntesDeHoy([$fecha_nacimiento])
    );

    $errores_cursos = array_merge(
        camposVacios([$cursos_id])
    );

    $errores = array_merge(
        $errores_nombre, $errores_apellido, $errores_fecha_nacimiento, $errores_cursos
    );

    if (empty($errores)) {
        $profesor = Profesor::getById($id);
        $profesor->nombre = $nombre;
        $profesor->apellido = $apellido;
        $profesor->fecha_nacimiento = $fecha_nacimiento;
        $profesor->cursos_id = $cursos_id;
        $profesor->update();

        header('Location: indexProfesor.php?pagina=1');
    }
}


if ($profesor) {
    require_once __DIR__ .'/../Views/profesores/editarProfesor.view.php';
}
