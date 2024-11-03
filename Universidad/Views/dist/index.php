<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
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
    <link rel="icon" href="../Views/dist/assets/images/logo-solo.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="../Views/dist/assets/css/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <!-- Cargar ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
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
				
                <div class="m-r-30 m-l-30">
                    <img src="../Views/dist/assets/images/logo-yo1.png" alt="" width="100rem" class="logo">
                </div>

				<div class="collapse navbar-collapse">
					<ul class="navbar-nav">
						
						<li class="nav-item p-0 m-r-25">
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
	<!-- [ Header ] end -->
	
	
    <!-- Container principal -->
    <div class="container col-12">

        <div class="pcoded-content">

            <!-- Título -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h3 class="m-b-10">Dashboard</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="container d-flex align-items-center justify-content-center col-12">

                    <div class="col-md-12 col-xl-4 col-12">

                        <div class="card flat-card">

                            <div class="row-table">

                                <div class="col-sm-6 card-body br">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                                              -->
                                              <div class="col-auto p-r-0">
                                                <img src="../Views/dist/assets/images/question.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?= count($alumnos) ?></h5>
                                            <span>Alumnos</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-music text-c-red mb-1 d-block"></i> -->
                                            <div class="col-auto p-r-0">
                                                <img src="../Views/dist/assets/images/writing.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?=count($profesores)?></h5>
                                            <span>Profesores</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row-table br">

                                <div class="col-sm-6 card-body br">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                              -->
                                              <div class="col-auto p-r-0">
                                                <img src="../Views/dist/assets/images/book.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?=count($materias)?><h5>
                                            <span>Materias</span>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="col-sm-6 card-body">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i> -->
                                            <div class="col-auto p-r-0">
                                                <img src="../Views/dist/assets/images/sketch.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?=count($examenes)?></h5>
                                            <span>Exámenes</span>
                                        </div>
                                    </div>
                                
                                </div>

                                
                            </div>

                            <div class="row-table">

                                <div class="col-sm-6 card-body br">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                                              -->
                                              <div class="col-auto p-r-0">
                                                <img src="../Views/dist/assets/images/question.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?= count($alumnos) ?></h5>
                                            <span>Alumnos</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-music text-c-red mb-1 d-block"></i> -->
                                            <div class="col-auto p-r-0">
                                                <img src="../Views/dist/assets/images/writing.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?=count($profesores)?></h5>
                                            <span>Profesores</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                           

                        </div>
                        
                        
                        <!-- widget primary card start -->


                        <!-- widget primary card end -->
                    </div>

                    <div class="col-xl-4 col-md-12 m-r-15">
                        <div class="card" style="height: 13rem; overflow-y: auto;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3>+20</h3>
                                        <h6 class="text-muted m-b-0">Alumnos<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                    </div>
                                    <div class="col-6">
                                        <div id="seo-chart2" class="d-flex align-items-end"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3>+1</h3>
                                        <h6 class="text-muted m-b-0">Profesor<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                    </div>
                                    <div class="col-6">
                                        <div id="seo-chart1" class="d-flex align-items-end"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card support-bar overflow-hidden col-xl-4 col-md-12">
                        <div class="card-header">
                            <h5 class="">Promedio general de notas</h4>
                        </div>
                        <!-- <div class="card-body pb-0">
                            <h2 class="m-0"></h2>
                            <span class="text-c-blue">Notas</span>
                            <p class="mb-3 mt-3">Promedio general de notas.</p>
                        </div> -->

                        <script>
                        'use strict';
                        $(document).ready(function() {
                            setTimeout(function() {
                                floatchart();
                            }, 100);
                        });

                        function floatchart() {
                            var options1 = {
                                chart: {
                                    type: 'area',
                                    height: 200,
                                    sparkline: {
                                        enabled: false // Desactivar para mostrar el eje X completo con los meses
                                    }
                                },
                                colors: ["#1abc9c"],
                                stroke: {
                                    curve: 'smooth',
                                    width: 2,
                                },
                                series: [{
                                    name: "Promedio",
                                    data: [10, 9, 8.65, 4.1, 9, 8.43, 9.44, 7, 5.9, 8.43, 9.76, 10] // Datos para cada mes
                                }],
                                xaxis: {
                                    categories: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                                    labels: {
                                        rotate: -45 // Rota los nombres de los meses para una mejor visualización
                                    }
                                },
                                tooltip: {
                                    x: {
                                        format: 'MMM' // Formato de los meses en el tooltip
                                    },
                                    y: {
                                        title: {
                                            formatter: function() {
                                                return 'Promedio: ';
                                            }
                                        }
                                    }
                                }
                            };

                            var chart = new ApexCharts(document.querySelector("#support-chart"), options1);
                            chart.render();
                        }
                    </script>

                    <div id="support-chart"></div>

                    </div>

                    <!-- <div class="col-md-12 col-xl-4 ">

                        
                        <div class="card flat-card widget-purple-card">
                            <div class="row-table">
                                <div class="col-sm-3 card-body">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="col-sm-9">
                                    <h4>17</h4>
                                    <h6>Cantidad de 10 en exámenes</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card flat-card widget-primary-card">
                            <div class="row-table">
                                <div class="col-sm-3 card-body">
                                    <i class="feather icon-star-on"></i>
                                </div>
                                <div class="col-sm-9">
                                    <h4>4000 +</h4>
                                    <h6>Exámenes aprobados</h6>
                                </div>
                            </div>
                        </div>

                    </div> -->

                </div>

            </div>

                <div class="container col-12 d-flex">


                <div class="col-xl-6 col-md-12">
                    <div class="card table-card" style="height: 20rem; overflow-y: auto;">
                        <div class="card-header">
                            <h5>Mejores promedios</h5>
                            <!-- <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="">
                                                Alumno
                                            </th>
                                            <th class="text-center">Promedio</th>
                                            <th class="text-center">Curso</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 

                                        foreach ($alumnos as $alumno) { ?>
                                            <tr onclick="window.location.href='/../Controllers/indexAlumno.php'" style="cursor: pointer;">
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="../Views/dist/assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6><?=$alumno->nombre.", ".$alumno->apellido?></h6>
                                                            <p class="text-muted m-b-0"><?=$alumno->edad()?> años</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">9,86</td>
                                            <td class="text-center"><label class="badge badge-light-primary">3°A</label></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="card" style="height: 20rem;">

                        <div class="card-header" style="height: 4rem;">
                            <h5 class="mb-4">Promedio de 2024</h4>
                        </div>
                        <div class="card-body" >
                            <h5 class="mb-4">Maximiliano, Alcaraz</h5>
                            <h5 class="text-c-green f-w-500"><i class="fa fa-caret-up m-r-15"></i> 2% más alto que el mes pasado</h3>
                        </div>
                        <div id="tot-lead" style="height:150px"></div>
                    </div>
            </div>


                </div>

                <div class="container col-12">
                
                    <div class="card chat-card">
                        <div class="card-header">
                            <h5>WirelessBot</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="height: 20rem; overflow-y: auto;">
                            <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="../Views/dist/assets/images/bot.png" alt="user image" class="img-radius wid-40">
                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">Me llamo WirelessBot, ¡consultame sobre la base de datos de tu institución y te ayudaré con lo que pueda!</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                            </div>
                            <div class="row m-b-20 send-chat">
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">¿Quién es y cuántos años tiene el alumno más viejo?</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                                <div class="col-auto p-l-0">
                                    <img src="../Views/dist/assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40">
                                </div>
                            </div>
                            <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="../Views/dist/assets/images/bot.png" alt="user image" class="img-radius wid-40">
                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">El alumno más viejo es Mauricio Rapari, quien tiene <b>50 años</b>.</p>
                                        <!-- <img src="../Views/dist/assets/images/widget/dashborad-1.jpg" alt="">
                                        <img src="../Views/dist/assets/images/widget/dashborad-3.jpg" alt=""> -->
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="input-group m-t-15 p-3">
                            <input type="text" name="task-insert" class="form-control" id="Project" placeholder="Send message">
                            <div class="input-group-append">
                                <button class="btn btn-primary">
                                    <i class="feather icon-message-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                        <p class="text-muted m-b-0 text-center">
                            Aviso: Los resultados proporcionados por este chatbot pueden no ser precisos o completos. Por favor, verifica la información antes de tomar decisiones basadas en ella.
                        </p>
                </div>
                </div>

            </div>
        </div>
    </div>

    <script src="../Views/dist/assets/js/vendor-all.min.js"></script>
    <script src="../Views/dist/assets/js/plugins/bootstrap.min.js"></script>
    <script src="../Views/dist/assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="../Views/dist/assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="../Views/dist/assets/js/pages/dashboard-main.js"></script>
</body>

</html>
