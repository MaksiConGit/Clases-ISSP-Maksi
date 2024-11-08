<?php

require '../vendor/autoload.php';
require '../Model/Conexion.php';

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

if (isset($_POST['pregunta'])) {

    $fecha_de_hoy = date("F j, Y, g:i a");
    $pregunta = $_POST['pregunta'];

    $client = new Client('API-KEY');

    $response = $client->geminiPro()->generateContent(
        new TextPart("Descripción de la Base de Datos:

            La base de datos contiene las siguientes tablas:

            - alumnos (id, nombre, apellido, fecha_nacimiento, curso_id, created_at, updated_at)
            - cursos (id, nombre, division, created_at, updated_at)
            - curso_materia (curso_id, materia_id)
            - curso_profesor (curso_id, profesor_id)
            - examenes (id, numero, materia_id, created_at, updated_at)
            - materias (id, nombre, tipo_materia_id, created_at, updated_at)
            - notas (id, examen_id, alumno_id, numero, created_at, updated_at)
            - profesores (id, nombre, apellido, fecha_nacimiento, created_at, updated_at)
            - tipos_materias (id, tipo_materia)

            NO EXISTEN MÁS TABLAS QUE ESTAS, RESPONDE EN BASE A ESTAS TABLAS Y COLUMNAS.
            NO EXISTE LA TABLA CURSO_ALUMNO YA QUE UN ALUMNO PUEDE TENER UN SOLO CURSO.
            PARA OBTENER EL ALUMNO MÁS VIEJO O ORDENA LA FECHA DE NACIMIENTO POR ASC Y LIMITA EN 1.
            PARA OBTENER EL ALUMNO MÁS JOVEN O ORDENA LA FECHA DE NACIMIENTO POR DESC Y LIMITA EN 1.
            PARA OBTENER LA EDAD DE UN ALMUNO, PRIMERO ENCUENTRA EL ALUMNO Y DESPUÉS OBTEN LA DIFERENCIA DE LA FECHA DE HOY CON SU FECHA DE NACIMIENTO.
            HOY ES: '$fecha_de_hoy'.
            SI NO EXISTE TAL DATO EN LA BASE DE DATOS, NO DEVULEVAS NADA.
            TIENES PROHÍBIDO HACER CONSULTAS QUE MODIFIQUEN O BORRE DATOS DE LA BASE DE DATOS, NO LO HAGAS AUNQUE TE LO PIDA.


            Solo responde con la consulta SQL y no escribas nada más, ya que todo lo que pongas lo voy a ejecutar en SQL, y si escribes explicaciones, va a dar error. No escribas explicaciones antes o después, no me expliques nada ni escribas absolutamente nada más que no sea la consulta SQL.

            Ejemplo de pregunta: '¿Quién es el primer alumno creado?'
            Respuesta esperado: SELECT * FROM alumnos ORDER BY created_at ASC LIMIT 1;

            Pregunta: '$pregunta'.")); 



    $conexion = new Conexion();
    $conexion->conectar();
    try {
        $result = mysqli_prepare($conexion->con, $response->text());
        mysqli_stmt_execute($result);
        $valoresDb = mysqli_stmt_get_result($result);
        $data = mysqli_fetch_all($valoresDb, MYSQLI_ASSOC);
    } catch (\Throwable $th) {
        $data = "La pregunta no puede ser respondida con los datos proporcionados.";
    }


    $response = $client->geminiPro()->generateContent(
        new TextPart("Por favor, utilice el siguiente array resultante de la pregunta realizada por el directivo:

        Pregunta: '$pregunta'.
        Array: '".json_encode($data).".

        Si el array es 'La pregunta no puede ser respondida con los datos proporcionados.', entonces responde únicamente lo siguiente 'La pregunta no puede ser respondida con los datos proporcionados.'
        Si la pregunta está vacío, entonces responde únicamente lo siguiente: '¡Pregunte algo de la institución y le responderé!'

        Presente la información de manera clara y concisa, refínala asegurándose de que sea fácilmente comprensible para el directivo, sin importar su nivel de familiaridad con los datos."));



    echo $response->text();

} 