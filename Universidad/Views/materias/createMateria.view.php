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
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tipo_materia_id">Tipo de Materia</label>
                                <select class="form-control" name="tipo_materia_id" id="tipo_materia_id">
                                        <option disabled selected hidden value="">Seleccione un tipo de materia</option>
                                        <?php foreach ($tipos_materias as $tipo_materia) { ?>
                                            <option value="<?= $tipo_materia->id ?>"><?= $tipo_materia->tipo_materia ?></option>
                                        <?php } ?>
                                </select>
                            </div>


                            <button type="submit" name="enviarFormulario" class="btn btn-primary">
                                <i class="fas fa fa-send">Enviar</i>
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>