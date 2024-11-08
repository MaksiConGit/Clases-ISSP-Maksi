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

        <form class="row g-3 needs-validation bg-border-warning" id="formulario1" novalidate>

          <?php $respuesta_profe = "Es un lenguaje de programación de consultas" ?>


          <h2 class="text-center">Examen 1</h2>
      
          <hr class="border-primary">
            
            <div class="col-md-12 col-lg-6 mb-4">
              <label for="" class="form-label" id="pregunta1">¿Qué es python?</label>
              <textarea type="text" class="form-control border-primary border-primary" id="respuesta" name="respuesta"></textarea>
              <label for="" class="form-label"><?= $respuesta_profe ?></label>
              <div class="alert alert-light" id="resultado" role="alert"></div>
            </div>
              <div class="col-12 d-flex justify-content-end">
                <div class="container d-flex justify-content-end">
                  <a class="btn btn-secondary" href="indexAlumno.view.html">Volver</a>
                </div>
                <input type="submit" value="Consultar">
              </div>
              
          </form>


          <script>
          const formulario1 = document.querySelector("#formulario1");

          formulario1.addEventListener("submit", evento => {
            evento.preventDefault();

            const pregunta = document.querySelector("#pregunta1").textContent.trim();
            const respuesta = document.querySelector("#respuesta").value.trim();
            const respuesta_profesor = `<?= $respuesta_profe ?>`;

            // Personalizar la consulta
            // // Opción default:
            // const consulta = `Responder la pregunta que te voy a hacer con el criterio de un profesor de informática la respuesta tiene que ser completa.
            // Si la respuesta está incompleta, devuelve false, si la respuesta está completa, devuelve true. Pregunta: ${pregunta} Respuesta: ${respuesta}.  ` ;

            // Opción con respuesta predefinida
            const consulta = `Actúa como un profesor evaluando la respuesta de un alumno. Compara las siguientes respuestas y determina si la respuesta del alumno captura los conceptos clave y la información esencial de la respuesta del profesor. Responde con "true" (minúsculas) si la respuesta del alumno incluye todos los aspectos importantes de la respuesta del profesor, y "false" (minúsculas) si le falta información crítica o si está incompleta.

            Respuesta del profesor: "${respuesta_profesor}"
            Respuesta del alumno: "${respuesta}"

            Recuerda que la respuesta del alumno debe incluir el propósito o contexto de la respuesta del profesor. Si la respuesta del alumno no es suficientemente específica o no aborda completamente la respuesta del profesor, devuelve "false".
            
            El alumno no necesariamente tiene que poner las palabras exactas de la respuesta del profesor.` ;

            const botonConsultar = document.querySelector("input[type='submit']");

            // Desactivar el botón y mostrar mensaje de espera
            botonConsultar.disabled = true;
            botonConsultar.value = "Espere, por favor...";

            const datosFormulario = new FormData();
            datosFormulario.append("consulta", consulta);

            fetch("consulta.php", {
              method: 'POST',
              body: datosFormulario
            }).then(respuesta => respuesta.json())
              .then(respuesta => {
                // Mostrar la respuesta y reactivar el botón
                document.querySelector("#resultado").innerHTML = `${respuesta.mensaje}<br>`;
                botonConsultar.disabled = false;
                botonConsultar.value = "Consultar";
              })
              .catch(error => {
                console.error('Error en la solicitud fetch:', error);
                // Reactivar el botón en caso de error
                botonConsultar.disabled = false;
                botonConsultar.value = "Consultar";
              });
          });
          </script>


        
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