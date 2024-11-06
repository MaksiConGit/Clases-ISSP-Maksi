<!DOCTYPE html>
<html lang="en">
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
    
    

</head>
<body>
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
										<li><a href="../Controllers/createAlumno.php" class="dropdown-item"><i class="fas fa-circle"></i>General</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="fas fa-circle"></i>Promedios</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i>ChatBot</a></li>
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
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 1°</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 2°</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 3°</a></li>
												<li><a href="indexAlumno.php" class="dropdown-item"><i class="fas fa-circle"></i> Todos</a></li>
												<!-- <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Modal</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Tabs & pills</a></li> -->
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Profesores</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 1°</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 2°</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 3°</a></li>
												<li><a href="indexProfesor.php" class="dropdown-item"><i class="fas fa-circle"></i> Todos</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Materias</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 1°</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 2°</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> 3°</a></li>
												<li><a href="indexMateria.php" class="dropdown-item"><i class="fas fa-circle"></i> Todos</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Formularios</h6>
											<ul class="pro-body">
												<li><a href="createAlumno.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Añadir alumnos</a></li>
												<li><a href="createProfesor.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Añadir profesores</a></li>
												<li><a href="createMateria.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Añadir materias</a></li>
												<!-- <li><a href="#!" class="dropdown-item"><i class="feather icon-upload-cloud"></i> File upload</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-scissors"></i> Image cropper</a></li> -->
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

  <style>
    .visible-feedback {
        display: block !important; /* Siempre muestra el feedback */
    }
</style>

  <div class="container d-flex justify-content-center align-items-center mt-4 col-8" style="min-height: calc(100vh - 120px);">
    <div class="container p-4 col-md-8 col-lg-10 border border-primary">
        <h5>Editar materia: <?=$materia->nombre?></h5>
        <hr>
        <form class="needs-validation" method="POST">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control
                    <?php
                    if (isset($_POST['actualizarDatos'])) {
                      if ($errores_nombre) {
                        echo 'is-invalid';
                      }
                      else{
                        echo 'is-valid';
                      }
                    }
                    ?>" id="validationCustom01" placeholder="Nombre" name="nombre" value="<?=$nombre?>" required>

                  <?php
                  if(isset($_POST['actualizarDatos'])){
                    
                    foreach ($errores_nombre as $error) { ?>
                        <div class="invalid-feedback visible-feedback is_valid">
                            <?= $error ?>
                        </div>
                    <?php } ?>

                  <?php } ?>

                </div>
            </div>
            
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Tipo de materia</label>
                    <select class="custom-select
                    <?php
                    if (isset($_POST['actualizarDatos'])) {
                      if ($errores_tipo_materia) {
                        echo 'is-invalid';
                      }
                      else{
                        echo 'is-valid';
                      }
                    }
                    ?>" name="tipo_materia_id" id="tipo_materia_id" required>
                        <?php foreach ($tipos_materias as $tipo_materia) { ?>
                            <option value="<?= $tipo_materia->id ?>" <?= ($tipo_materia->id == $tipo_materia_id) ? 'selected' : '' ?>>
                                <?= $tipo_materia->tipo_materia ?>
                            </option>
                        <?php } ?>
                    </select>
                    <?php foreach ($errores_tipo_materia as $error) { ?>
                        <div class="invalid-feedback visible-feedback is_valid">
                            <?= $error ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Editar</button>

            <div class="col-xl-4 col-md-6">
                <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">¿Está seguro que quiere editar esta materia?</h5>
                            </div>
                            <div class="modal-body">
                                <p class="mb-0">Los datos podrán ser modificados más adelante.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Descartar</button>
                                <button type="submit" name="actualizarDatos" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        
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

        <script src="../Views/dashboard/dist/assets/js/vendor-all.min.js"></script>
        <script src="../Views/dashboard/dist/assets/js/plugins/bootstrap.min.js"></script>
        <script src="../Views/dashboard/dist/assets/js/pcoded.min.js"></script>

        <!-- Apex Chart -->
        <script src="../Views/dashboard/dist/assets/js/plugins/apexcharts.min.js"></script>


        <!-- custom-chart js -->
        <script src="../Views/dashboard/dist/assets/js/pages/dashboard-main.js"></script>

</body>
</html>