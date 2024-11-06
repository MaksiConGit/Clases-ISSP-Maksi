<!DOCTYPE html>
<html lang="es">
<head>
    <title>University Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="../Views/dashboard/dist/assets/images/logo-solo.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="../Views/dashboard/dist/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <!-- Cargar ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-abc123xyz..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    

</head>
<body>

<div class="loader-bg">
<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
				
                <div class="m-r-10 m-l-30">
                    <a href="indexdashboard.php">
                    <img src="../Views/dashboard/dist/assets/images/logo-yo1.png" alt="" width="100rem" class="logo">
                    </a>
                </div>

				<div class="collapse navbar-collapse">
					<ul class="navbar-nav">
						
						<li class="nav-item">
							<div class="dropdown">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Dashboard
								</a>
								<div class="dropdown-menu profile-notification ">
									<ul class="pro-body">
										<li><a href="indexDashboard.php" class="dropdown-item"><i class="fas fa-circle"></i>General</a></li>
										<li><a href="404.php" class="dropdown-item"><i class="fas fa-circle"></i>Promedios</a></li>
										<li><a href="404.php" class="dropdown-item"><i class="fas fa-circle"></i>ChatBot</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown mega-menu">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Gestionar
								</a>
								<div class="dropdown-menu profile-notification ">
									<div class="row no-gutters">
										<div class="col">
											<h6 class="mega-title">Alumnos</h6>
											<ul class="pro-body">
												<li><a href="indexAlumno.php?pagina=1" class="dropdown-item"><i class="fas fa-circle"></i> Ver alumnos</a></li>
												<li><a href="createAlumno.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Añadir alumnos</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Profesores</h6>
											<ul class="pro-body">
                                                <li><a href="indexProfesor.php?pagina=1" class="dropdown-item"><i class="fas fa-circle"></i> Ver profesores</a></li>
                                                <li><a href="createProfesor.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Añadir profesores</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Materias</h6>
											<ul class="pro-body">
                                                <li><a href="indexMateria.php?pagina=1" class="dropdown-item"><i class="fas fa-circle"></i> Ver materias</a></li>
                                                <li><a href="createMateria.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Añadir materias</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Cursos</h6>
											<ul class="pro-body">
                                                <li><a href="404.php" class="dropdown-item"><i class="fas fa-circle"></i> Ver cursos</a></li>
                                                <li><a href="404.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Añadir cursos</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
                        <li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Buscar">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
    

    <div class="container mt-5">

        <div class="btn-group mb-2 mr-2 col-4 container">
            <div class="col-5 d-flex">
            <h2>Profesores</h2>
            <button class="btn  btn-primary dropdown-toggle m-l-20" disabled type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $curso_seleccionado ? $curso_seleccionado->nombre . "°" . $curso_seleccionado->division : 'Cursos'?></button>
            <div class="dropdown-menu">

            <?php
                foreach ($cursos as $curso) {

                    if ($curso_seleccionado) {

                        if ($curso->id != $curso_seleccionado->id) { ?>
                            <a class="dropdown-item" href="indexProfesor.php?pagina=1&curso_id=<?=$curso->id?>"><?=$curso->nombre . "°" . $curso->division?></a>
                        <?php } ?>

                    <?php }
                    else { ?>

                        <a class="dropdown-item" href="indexProfesor.php?pagina=1&curso_id=<?=$curso->id?>"><?=$curso->nombre . "°" . $curso->division?></a>
                        
                    <?php } ?>
                    
                    
            <?php } ?>
            <a class="dropdown-item" href="indexProfesor.php?pagina=1">Todos</a>
            </div>
            </div>

        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item <?= ($pagina <= 1) ? 'disabled' : '' ?>">
                <a class="page-link" href="indexProfesor.php?pagina=<?=$pagina-1?>">Previous</a>
                </li>
                
                <?php
                                    
                    for ($i=1; $i <= count($paginas_profesores); $i++) { ?> 
                        
                        <li class="page-item <?= ($i == $pagina) ? 'active' : '' ?>">

                            <?php 

                            if ($curso_seleccionado) { ?>
                            
                                <a class="page-link" href="indexProfesor.php?pagina=<?=$i?>&curso_id=<?=$curso_seleccionado->id?>"><?=$i?></a>

                            <?php }
                            else { ?>
                                <a class="page-link" href="indexProfesor.php?pagina=<?=$i?>"><?=$i?></a>

                            <?php }
                            ?>

                        </li>
                    
                <?php } ?>
                
                <li class="page-item <?= ($pagina == count($paginas_profesores)) ? 'disabled' : '' ?>">
                <a class="page-link" href="indexProfesor.php?pagina=<?=$pagina+1?>">Next</a>
                </li>
            </ul>
        </nav>

        
        <div class="row row-cols-1 row-cols-md-4 g-4">

        <?php
            
            foreach ($paginas_profesores[$pagina-1] as $profesor) { ?>
        
            <div class="col-md-6 col-xl-4">
                <a href="editarProfesor.php?id=<?= $profesor->id; ?>">


                <div class="card">
                    <!-- <img class="img-fluid card-img-top" src="../Images/física-e1534938838719.jpg" alt="Card image cap"> -->
                    <div class="card-header">
                    <h5 class="card-title"><?=$profesor->nombre.", ".$profesor->apellido?></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-lg-2"><b>Materias: </b></p>
                        <p class="card-text mb-lg-2"><b>Cursos:
                            <?php

                            // $ignorar_primero = false;
                            // foreach ($profesor->cursos() as $curso) {
                            //     echo $ignorar_primero ? ", " : '' ;
                            //     echo $curso->nombre . "°" . $curso->division;
                            //     $ignorar_primero = true;
                            // }

                        ?>
                        </b></p>
                        <p class="card-text"><small class="text-muted">Última vez editado <?=$profesor->updated_at?></small></p>
                    </div>
                </div>
                </a>
            </div>

            <?php

            } ?>


        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item <?= ($pagina <= 1) ? 'disabled' : '' ?>">
                <a class="page-link" href="indexProfesor.php?pagina=<?=$pagina-1?>">Previous</a>
                </li>
                
                <?php
                                    
                    for ($i=1; $i <= count($paginas_profesores); $i++) { ?> 
                        
                        <li class="page-item <?= ($i == $pagina) ? 'active' : '' ?>">

                            <?php 

                            if ($curso_seleccionado) { ?>
                            
                                <a class="page-link" href="indexProfesor.php?pagina=<?=$i?>&curso_id=<?=$curso_seleccionado->id?>"><?=$i?></a>

                            <?php }
                            else { ?>
                                <a class="page-link" href="indexProfesor.php?pagina=<?=$i?>"><?=$i?></a>

                            <?php }
                            ?>

                        </li>
                    
                <?php } ?>
                
                <li class="page-item <?= ($pagina == count($paginas_profesores)) ? 'disabled' : '' ?>">
                <a class="page-link" href="indexProfesor.php?pagina=<?=$pagina+1?>">Next</a>
                </li>
            </ul>
        </nav>

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

        <div class="fixed-button active"><a href="createProfesor.php" class="btn btn-md btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>');

        <script src="../Views/dashboard/dist/assets/js/vendor-all.min.js"></script>
    <script src="../Views/dashboard/dist/assets/js/plugins/bootstrap.min.js"></script>
    <script src="../Views/dashboard/dist/assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="../Views/dashboard/dist/assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="../Views/dashboard/dist/assets/js/pages/dashboard-main.js"></script>
</body>
</html>