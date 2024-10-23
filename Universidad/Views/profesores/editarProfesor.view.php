<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Profesor</title>
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

                        <h3>Editar Profesor - ID: <?= $profesor->id ?></h3>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" value="<?= $profesor->nombre ?>" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" value="<?= $profesor->apellido ?>" name="apellido" id="apellido" class="form-control">
                            </div>
                            <!-- Materias -->
                            <div class="form-group">
                                <label for="materia_id">Materia</label>
                               <select class="form-control" name="materia_id" id="materia_id">
                                    <option hidden value="<?=$profesor->materia()->id?>" ><?= $profesor->materia()->nombre ?></option>
                                    <?php foreach ($materias as $materia) { ?>
                                        <option value="<?= $materia->id ?>"><?= $materia->nombre ?></option>
                                    <?php } ?>
                               </select>
                            </div>


                            <button type="submit" name="actualizarDatos" class="btn btn-primary">
                                <i class="fas fa fa-send">Actualizar</i>
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>