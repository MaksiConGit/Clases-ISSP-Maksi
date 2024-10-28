<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>
    <!-- Include bootstrap last version -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include jQuery last version -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col col-12">
                <div class="card">
                    <div class="card-header">

                        <h3>Crear Materia</h3>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $nombre ?>">
                            </div>
                            <div class="form-group">
                                <label for="tipo_materia_id">Tipo de Materia</label>
                                <select class="form-control" name="tipo_materia_id" id="tipo_materia_id">
                                        <option disabled <?= $tipo_materia_id ? 'select' : '' ?> hidden value="">Seleccione un tipo de materia</option>
                                        <?php foreach ($tipos_materias as $tipo_materia) { ?>
                                            <option <?=($tipo_materia->id == $tipo_materia_id) ? 'selected' : ''?> value="<?= $tipo_materia->id  ?>"><?= $tipo_materia->tipo_materia ?></option>
                                        <?php } ?>
                                </select>
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Enviar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Quiere cargar este alumno?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Los datos podrán ser modificados más adelante.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                                    <button type="submit" class="btn btn-primary" name="enviarFormulario" class="btn btn-primary" >Guardar cambios</button>
                                </div>
                                </div>
                            </div>
                            </div>

                            <?php

                            foreach ($errores as $error) { ?>

                            <div class="alert alert-danger p-1 mt-3" role="alert">
                                <?= $error ?>
                            </div>
                                
                            <?php } ?>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>