<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="../../Images/icons8-colegio-96.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark"">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="../../Images/icons8-libros-94.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Gestión Escolar
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Alumnos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../alumnos/indexAlumno.view.html">1°</a></li>
                        <li><a class="dropdown-item" href="../alumnos/indexAlumno.view.html">2°</a></li>
                        <li><a class="dropdown-item" href="../alumnos/indexAlumno.view.html">3°</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../alumnos/indexAlumno.view.html">Ver todos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profesores
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../profesores/indexProfesor.view.html">1°</a></li>
                            <li><a class="dropdown-item" href="../profesores/indexProfesor.view.html">2°</a></li>
                            <li><a class="dropdown-item" href="../profesores/indexProfesor.view.html">3°</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../profesores/indexProfesor.view.html">Ver todos</a></li>
                        </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Materias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../materias/indexMateria.view.html">1°</a></li>
                        <li><a class="dropdown-item" href="../materias/indexMateria.view.html">2°</a></li>
                        <li><a class="dropdown-item" href="../materias/indexMateria.view.html">3°</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../materias/indexMateria.view.html">Ver todos</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            </div>
        </div>
        </nav>

    <div class="container mt-5">

        <h2>Alumnos
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1">A</label>
          
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">B</label>
          
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">C</label>
          </div>
        </h2>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            <?php
            
                foreach ($alumnos as $alumno) { ?>
                    
                    <div class="col">
                        <div class="card h-30">
                        <div class="card-body">
                            <h5 class="card-title mt-1"><?=$alumno->nombre.' '.$alumno->apellido?></h5>
                            <p class="card-text mb-lg-2"><b>Edad:</b> <?=$alumno->edad()?> años</p>
                            <p class="card-text mb-2"><b>Promedio:</b> 10</p>
                            <a href="editAlumno.view.html" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Eliminar</a>    
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Última vez editado: <?=$alumno->updated_at ?
                            $alumno->ultimaVezEditado()[0] .':'. $alumno->ultimaVezEditado()[1] .':'. $alumno->ultimaVezEditado()[2] .':'. $alumno->ultimaVezEditado()[3] : 'Nunca'?></small>
                        </div>
                        </div>
                    </div>

                <?php } ?>

        </div>

        <div class="container p-3">
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
            </nav>
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