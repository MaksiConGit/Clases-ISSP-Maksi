<?php

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/TipoMateria.php';
require_once __DIR__ .'/../Requests/Requests.php';

$id = $_GET['id'];
$alumno = Alumno::getById($id);

$nombre = $alumno->nombre;
$apellido = $alumno->apellido;
$fecha_nacimiento = $alumno->fecha_nacimiento;
$curso_id = $alumno->curso_id;

$materias = Materia::all();
$cursos = Curso::all();

$errores = [];
$errores_nombre = [];
$errores_apellido = [];
$errores_fecha_nacimiento = [];
$errores_curso = [];


if(isset($_POST['actualizarDatos'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $curso_id = $_POST['curso_id'] ?? null;

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
        camposVacios([$curso_id])
    );

    $errores = array_merge(
        $errores_nombre, $errores_apellido, $errores_fecha_nacimiento
    );

    if (empty($errores)) {
        $alumno = Alumno::getById($id);
        $alumno->nombre = $nombre;
        $alumno->apellido = $apellido;
        $alumno->fecha_nacimiento = $fecha_nacimiento;
        $alumno->curso_id = $curso_id;
        $alumno->update();

        header('Location: indexAlumno.php?pagina=1');
    }
}


if ($alumno) {
    require_once __DIR__ .'/../Views/alumnos/editarAlumno.view.php';
}
