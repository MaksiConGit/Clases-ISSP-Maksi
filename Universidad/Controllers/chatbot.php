<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="../../Images/icons8-colegio-96.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center mt-4 col-12" style="min-height: calc(100vh - 120px);">
    <div class="container p-4 col-md-8 col-lg-10 border border-primary">

        <form class="row g-3 needs-validation bg-border-warning" id="formulario1" method="POST"novalidate>

          <h2 class="text-center">Examen 1</h2>
      
          <hr class="border-primary">
            
            <div class="col-md-12 col-lg-6 mb-4">
              <!-- <label for="" class="form-label" name="pregunta">¿Cuál es el lugar más frío de la tierra?</label> -->
              <textarea type="text" class="form-control border-primary border-primary" name="pregunta" placeholder="Consulta a la base de datos" value=""></textarea>
              <!-- <label for="" class="form-label" id="pregunta1">Respuesta profesor</label>
              <textarea type="text" class="form-control border-primary border-primary" name="respuesta_profesor"></textarea> -->
              <!-- <label for="" class="form-label" id="pregunta1">Respuesta alumno</label>
              <textarea type="text" class="form-control border-primary border-primary" name="respuesta_alumno"></textarea> -->
              <?php

                require '../vendor/autoload.php';
                require_once __DIR__ .'/../Model/Alumno.php';
                require_once __DIR__ .'/../Model/Profesor.php';
                require_once __DIR__ .'/../Model/TipoMateria.php';
                require_once __DIR__ .'/../Model/Materia.php';
                use GeminiAPI\Client;
                use GeminiAPI\Resources\Parts\TextPart;

                $fecha_de_hoy = date("F j, Y, g:i a");
                $info[] = Alumno::all();
                $info[] = Materia::all();
                $info[] = TipoMateria::all();
                $info[] = Profesor::all();
                $stringJson = "";

                foreach ($info as $info) {
                    $stringJson = $stringJson.json_encode($info);                
                }


                // $info = "";
                
                // foreach ($alumnos as $alumno) {
                //     $info += "alumno_nombre: $alumno->nombre";
                // }


                if (isset($_POST['enviar'])) {

                    $pregunta = $_POST['pregunta'];


                    $client = new Client('API-KEY');
                    $response = $client->geminiPro()->generateContent(
                        new TextPart("Responda de forma breve y precisa a las consultas de un directivo de una institución escolar sobre los datos en la base de datos. Si la consulta no se relaciona con la información disponible en la base de datos, responda: 'La consulta no está relacionada a la base de datos.' Si la consulta es relevante pero no hay suficiente información para responder, indique: 'No hay suficiente información en la base de datos para responder su consulta.'

                        Base de datos: ". $stringJson ."
                        Consulta del directivo: '$pregunta'
                        Fecha de hoy: '$fecha_de_hoy'

                        Actúe como un bot institucional, proporcionando únicamente la información relevante sin mostrar IDs ni datos técnicos innecesarios. Para consultas sobre datos cuantitativos, como el número de alumnos, realice los cálculos necesarios directamente. Diríjase al directivo en un tono formal, empleando el tratamiento de 'usted' en reconocimiento a su cargo.

                        Escriba la respuesta utilizando etiquetas HTML cuando sea necesario. Por ejemplo, para texto en negrita, utilice <b> en vez de **."));
                    
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