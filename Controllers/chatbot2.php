<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="../../Images/icons8-colegio-96.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center mt-4 col-12" style="min-height: calc(100vh - 120px);">
    <div class="container p-4 col-md-8 col-lg-10 border border-primary">

        <form class="row g-3 needs-validation bg-border-warning" id="formulario1" method="POST"novalidate>

          <h2 class="text-center">Examen 1</h2>
      
          <hr class="border-primary">
            
            <div class="col-md-12 col-lg-6 mb-4">

              <textarea type="text" class="form-control border-primary border-primary" name="pregunta" placeholder="Consulta a la base de datos" value=""></textarea>

              <?php

                require '../vendor/autoload.php';
                require '../Model/Conexion.php';

                use GeminiAPI\Client;
                use GeminiAPI\Resources\Parts\TextPart;

                if (isset($_POST['enviar'])) {

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
                            PARA OBTENER EL ALUMNO MÁS VIEJO O MÁS JOVEN FILTRA LA FECHA DE NACIMIENTO POR ASC Y LIMITA EN 1.
                            HOY ES: '$fecha_de_hoy'.
                            SI NO EXISTE TAL DATO EN LA BASE DE DATOS, NO DEVULEVAS NADA.

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

                    ?>

                    <div class="alert alert-success" id="resultado" role="alert"><?=$response->text()?></div>

                <?php } ?>

            </div>
              <div class="col-12 d-flex justify-content-end">
                <div class="container d-flex justify-content-end">
                  <a class="btn btn-secondary" href="indexAlumno.view.html">Volver</a>
                </div>
                <button type="submit" name="enviar">Consultar</button>

              </div>
              
          </form>



        
      </div>

      </div>
    </div>
  </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar alumno</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ¿Está seguro de que quiere eliminar el alumno <b>Maximiliano, Alcaraz</b>? Este cambio no podrá ser deshecho.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Eliminar</button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Maximiliano, Alcaraz</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Escribir nombre y apellido:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Confirmar nombre y apellido:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Eliminar permanentemente</button>
            </div>
            </div>
        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>