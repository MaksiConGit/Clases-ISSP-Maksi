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
                                                <li><a href="indexCurso.php?pagina=1" class="dropdown-item"><i class="fas fa-circle"></i> Ver cursos</a></li>
                                                <li><a href="createCurso.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Añadir cursos</a></li>
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
        display: block !important;
    }
</style>

  <div class="container d-flex justify-content-center align-items-center mt-4 col-8" style="min-height: calc(100vh - 120px);">
    <div class="container p-4 col-md-8 col-lg-10 border border-primary">
        <h5>Editar alumno: <?=$alumno->nombre . ", " . $alumno->apellido?></h5>
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
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Apellido</label>
                    <input type="text" class="form-control
                    <?php
                    if (isset($_POST['actualizarDatos'])) {
                      if ($errores_apellido) {
                        echo 'is-invalid';
                      }
                      else{
                        echo 'is-valid';
                      }
                    }
                    ?>" id="validationCustom01" placeholder="Apellido" name="apellido" value="<?=$apellido?>" required>

                  <?php
                  if(isset($_POST['actualizarDatos'])){
                    
                    foreach ($errores_apellido as $error) { ?>
                        <div class="invalid-feedback visible-feedback is_valid">
                            <?= $error ?>
                        </div>
                    <?php } ?>

                  <?php } ?>

                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Fecha de nacimiento</label>
                    <input type="date" class="form-control
                    <?php
                    if (isset($_POST['actualizarDatos'])) {
                      if ($errores_fecha_nacimiento) {
                        echo 'is-invalid';
                      }
                      else{
                        echo 'is-valid';
                      }
                    }
                    ?>" id="validationCustom01" placeholder="Apellido" name="fecha_nacimiento" value="<?=$fecha_nacimiento?>" required>

                  <?php
                  if(isset($_POST['actualizarDatos'])){
                    
                    foreach ($errores_fecha_nacimiento as $error) { ?>
                        <div class="invalid-feedback visible-feedback is_valid">
                            <?= $error ?>
                        </div>
                    <?php } ?>

                  <?php } ?>

                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Curso</label>
                    <select class="custom-select
                    <?php
                    if (isset($_POST['actualizarDatos'])) {
                      if ($errores_curso) {
                        echo 'is-invalid';
                      }
                      else{
                        echo 'is-valid';
                      }
                    }
                    ?>" name="curso_id" id="curso_id" required>
                        <?php foreach ($cursos as $curso) { ?>
                            <option value="<?= $curso->id ?>" <?= ($curso->id == $curso_id) ? 'selected' : '' ?>>
                                <?= $curso->nombre."°".$curso->division ?>
                            </option>
                        <?php } ?>
                    </select>
                    <?php foreach ($errores_curso as $error) { ?>
                        <div class="invalid-feedback visible-feedback is_valid">
                            <?= $error ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Editar</button>
            <a href="indexAlumno.php?pagina=1"><button type="button" class="btn btn-secondary m-l-10">Volver</button></a>
            <button type="button" class="btn btn-outline-danger m-l-10" data-toggle="modal" data-target="#exampleModalCenter1">Eliminar</button>


            <div class="col-xl-4 col-md-6">
                <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">¿Está seguro que quiere editar esta alumno?</h5>
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

            <div class="col-xl-4 col-md-6">
                <div id="exampleModalCenter1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">¿Está seguro que quiere eliminar este alumno?</h5>
                            </div>
                            <div class="modal-body">
                                <p class="mb-0">Los datos NO podrán ser modificados más adelante.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Descartar</button>
                                <a href="eliminarAlumno.php?id=<?=$alumno->id?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        
    </div>
</div>

<div class="fixed-button active"><a href="createAlumno.php" class="btn btn-md btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>');


        <script src="../Views/dashboard/dist/assets/js/vendor-all.min.js"></script>
        <script src="../Views/dashboard/dist/assets/js/plugins/bootstrap.min.js"></script>
        <script src="../Views/dashboard/dist/assets/js/pcoded.min.js"></script>

        <!-- Apex Chart -->
        <script src="../Views/dashboard/dist/assets/js/plugins/apexcharts.min.js"></script>


        <!-- custom-chart js -->
        <script src="../Views/dashboard/dist/assets/js/pages/dashboard-main.js"></script>

</body>
</html>