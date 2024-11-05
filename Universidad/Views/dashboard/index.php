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
    <link rel="icon" href="../Views/dashboard/dist/assets/images/logo-solo.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="../Views/dashboard/dist/assets/css/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <!-- Cargar ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    

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
                        <li class="nav-item">
							<div class="dropdown mega-menu">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Dev Options
								</a>
								<div class="dropdown-menu profile-notification ">
									<div class="row no-gutters">
										<div class="col">
											<h6 class="mega-title">Rellenar</h6>
											<ul class="pro-body">
                                                <li><a href="../Seeders/materiaSeeder.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Generar materias (2)</a></li>
												<li><a href="../Seeders/cursoSeeder.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Generar cursos (2)</a></li>
												<li><a href="../Seeders/alumnoSeeder.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Generar alumnos (10)</a></li>
												<li><a href="../Seeders/profesorSeeder.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Generar profesores (5)</a></li>
												<li><a href="../Seeders/examenSeeder.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Generar exámenes (5)</a></li>
												<li><a href="../Seeders/notaSeeder.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Generar notas (10)</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Vaciar</h6>
											<ul class="pro-body">
                                                <li><a href="../Seeders/alumnoTruncate.php" class="dropdown-item"><i class="feather icon-file-minus"></i> Vaciar alumnos</a></li>
												<li><a href="../Seeders/profesorTruncate.php" class="dropdown-item"><i class="feather icon-file-minus"></i> Vaciar profesores</a></li>
												<li><a href="../Seeders/cursoTruncate.php" class="dropdown-item"><i class="feather icon-file-minus"></i> Vaciar cursos</a></li>
                                                <li><a href="../Seeders/materiaTruncate.php" class="dropdown-item"><i class="feather icon-file-minus"></i> Vaciar materias</a></li>
												<li><a href="../Seeders/examenTruncate.php" class="dropdown-item"><i class="feather icon-file-minus"></i> Vaciar exámenes</a></li>
												<li><a href="../Seeders/notaTruncate.php" class="dropdown-item"><i class="feather icon-file-minus"></i> Vaciar notas</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Extra</h6>
											<ul class="pro-body">
                                                <li><a href="../Seeders/fillTables.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Rellenar Base de Datos</a></li>
                                                <li><a href="../Seeders/truncateTables.php" class="dropdown-item"><i class="feather icon-file-minus"></i> Vaciar Base de Datos</a></li>
                                                <hr>
                                                <li><a href="../Seeders/alumnoSeeder.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Base de Datos San Pablo</a></li>
                                                <hr>
                                                <li><a href="notasecret.php" class="dropdown-item"><i class="feather icon-file-plus"></i> Opción secreta</a></li>
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

                        <div class="card flat-card" style="height: 17rem;">

                            <div class="row-table">

                                <div class="col-sm-6 card-body br">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                                              -->
                                              <div class="col-auto p-r-0">
                                                <img src="../Views/dashboard/dist/assets/images/question.png" alt="user image" class="wid-40">
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
                                                <img src="../Views/dashboard/dist/assets/images/writing.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?=count($profesores)?></h5>
                                            <span>Profesores</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row-table">

                                                            
                                <div class="col-sm-6 card-body br">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i> -->
                                            <div class="col-auto p-r-0">
                                                <img src="../Views/dashboard/dist/assets/images/course.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?=count($cursos)?></h5>
                                            <span>Cursos</span>
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="col-sm-6 card-body">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                              -->
                                              <div class="col-auto p-r-0">
                                                <img src="../Views/dashboard/dist/assets/images/book.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?=count($materias)?><h5>
                                            <span>Materias</span>
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
                                                <img src="../Views/dashboard/dist/assets/images/sketch.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?= count($examenes) ?></h5>
                                            <span>Exámenes</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- <i class="icon feather icon-music text-c-red mb-1 d-block"></i> -->
                                            <div class="col-auto p-r-0">
                                                <img src="../Views/dashboard/dist/assets/images/score.png" alt="user image" class="wid-40">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5><?=count($notas)?></h5>
                                            <span>Notas</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                           

                        </div>
                        
                        
                        <!-- widget primary card start -->


                        <!-- widget primary card end -->
                    </div>

                    <div class="col-xl-4 col-md-12 m-r-15">
                        <div class="card" style="height: 17rem; overflow-y: auto;">
                            <div class="card-body d-flex">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3>
                                        <?php
                                        
                                            if(($alumnos_mes[date('n')-1]['cantidad'] - $alumnos_mes[date('n')-2]['cantidad'] > 0)){
                                                echo "+";
                                            }
                                        
                                        ?>
                                        <?=($alumnos_mes[date('n')-1]['cantidad'] - $alumnos_mes[date('n')-2]['cantidad'])?>
                                        </h3>
                                        <h6 class="text-muted m-b-0">Alumnos<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                    </div>
                                    <div class="col-6">
                                        <div id="seo-chart2" class="d-flex align-items-end"></div>
                                        <script>
                                            $(function() {
                                                var options = {
                                                    chart: {
                                                        type: 'bar',
                                                        height: 70,
                                                        sparkline: {
                                                            enabled: true
                                                        }
                                                    },
                                                    dataLabels: {
                                                        enabled: false
                                                    },
                                                    colors: ["#2ecc71"],
                                                    plotOptions: {
                                                        bar: {
                                                            columnWidth: '60%'
                                                        }
                                                    },
                                                    series: [{
                                                        data: [<?php foreach ($alumnos_mes as $alumno) {echo $alumno['cantidad'].', ';} ?>] // 12 datos, uno por cada mes
                                                    }],
                                                    xaxis: {
                                                        categories: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                                                        labels: {
                                                            show: true // Muestra las etiquetas de los meses
                                                        },
                                                        crosshairs: {
                                                            width: 1
                                                        }
                                                    },
                                                    tooltip: {
                                                        fixed: {
                                                            enabled: false
                                                        },
                                                        x: {
                                                            show: true // Muestra el mes en el tooltip
                                                        },
                                                        y: {
                                                            title: {
                                                                formatter: function(seriesName) {
                                                                    return 'Bounce Rate:';
                                                                }
                                                            }
                                                        },
                                                        marker: {
                                                            show: false
                                                        }
                                                    }
                                                };
                                                
                                                var chart = new ApexCharts(document.querySelector("#seo-chart2"), options);
                                                chart.render();
                                            });
                                        </script>
 
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3>
                                        <?php
                                        
                                            if(($profesores_mes[date('n')-1]['cantidad'] - $profesores_mes[date('n')-2]['cantidad'] > 0)){
                                                echo "+";
                                            }
                                        
                                        ?>
                                        <?=($profesores_mes[date('n')-1]['cantidad'] - $profesores_mes[date('n')-2]['cantidad'])?>
                                        </h3>
                                        <h6 class="text-muted m-b-0">Profesor<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                    </div>
                                    <div class="col-6">
                                        <div id="seo-chart1" class="d-flex align-items-end"></div>
                                         <script>
                                            $(function() {
                                                var options = {
                                                    chart: {
                                                        type: 'area',
                                                        height: 70,
                                                        sparkline: {
                                                            enabled: true
                                                        }
                                                    },
                                                    dataLabels: {
                                                        enabled: false
                                                    },
                                                    colors: ["#1abc9c"],
                                                    fill: {
                                                        type: 'solid',
                                                        opacity: 0.3
                                                    },
                                                    markers: {
                                                        size: 2,
                                                        opacity: 0.9,
                                                        colors: "#1abc9c",
                                                        strokeColor: "#1abc9c",
                                                        strokeWidth: 2,
                                                        hover: {
                                                            size: 4
                                                        }
                                                    },
                                                    stroke: {
                                                        curve: 'straight',
                                                        width: 3
                                                    },
                                                    series: [{
                                                        name: 'series1',
                                                        data: [<?php foreach ($profesores_mes as $profesor) {echo $profesor['cantidad'].', ';} ?>] // 12 datos, uno por cada mes
                                                    }],
                                                    xaxis: {
                                                        categories: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                                                        labels: {
                                                            show: true // Asegura que se muestren las etiquetas de los meses
                                                        }
                                                    },
                                                    tooltip: {
                                                        fixed: {
                                                            enabled: false
                                                        },
                                                        x: {
                                                            show: true // Muestra el nombre del mes en el tooltip
                                                        },
                                                        y: {
                                                            title: {
                                                                formatter: function(seriesName) {
                                                                    return 'Visits:';
                                                                }
                                                            }
                                                        },
                                                        marker: {
                                                            show: false
                                                        }
                                                    }
                                                };
                                                
                                                var chart = new ApexCharts(document.querySelector("#seo-chart1"), options);
                                                chart.render();
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card support-bar overflow-hidden col-xl-4 col-md-12" style="height: 17rem;">
                        <div class="card-header">
                            <h5 class="">Promedio general de notas</h4>
                        </div>

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
                                    data: [<?php foreach ($promedio_general_mes as $promedio) {echo $promedio['promedio'].', ';} ?>] // Datos para cada mes
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

                                        foreach ($alumnos_f_promedio as $alumno) { ?>
                                            <tr onclick="window.location.href='/../Controllers/indexAlumno.php'" style="cursor: pointer;">
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="../Views/dashboard/dist/assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6><?=$alumno->nombre.", ".$alumno->apellido?></h6>
                                                            <p class="text-muted m-b-0"><?=$alumno->edad()?> años</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><?= $alumno->promedio() ?></td>
                                            <td class="text-center"><label class="badge badge-light-primary"><?= $alumno->curso()->nombre. '°' .strtoupper($alumno->curso()->division) ?></label></td>
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

                        <div class="card-body chat-body" id="chatDisplay" style="height: 20rem; overflow-y: auto;">

                            <div class="chat-messages">
                                <div class="row m-b-20 received-chat">
                                    <div class="col-auto p-r-0">
                                        <img src="../Views/dashboard/dist/assets/images/bot.png" alt="user image" class="img-radius wid-40">
                                    </div>
                                    <div class="col">
                                        <div class="msg">
                                            <p class="m-b-0">Me llamo WirelessBot, ¡consultame sobre la base de datos de tu institución y te ayudaré con lo que pueda!</p>
                                        </div>
                                        <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="input-group m-t-15 p-3">
                            <input type="text" name="task-insert" class="form-control" id="pregunta" placeholder="Send message">
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="enviarPregunta">
                                    <i class="feather icon-message-circle"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function () {
                    $('#enviarPregunta').on('click', function (e) {
                        e.preventDefault();
                        sendMessage();
                    });

                    $('#pregunta').on('keydown', function (e) {
                        if (e.key === 'Enter') {
                            e.preventDefault(); // Evita que se envíe un salto de línea
                            sendMessage();
                        }
                    });

                    function sendMessage() {
                        let pregunta = $('#pregunta').val().trim();
                        if (pregunta) {
                            // Añadir la pregunta del usuario al contenedor específico de chat
                            $('.chat-body').append(`
                                <div class="row m-b-20 send-chat">
                                    <div class="col">
                                        <div class="msg">
                                            <p class="m-b-0">${pregunta}</p>
                                        </div>
                                        <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>${getFormattedTime()}</p>
                                    </div>
                                    <div class="col-auto p-l-0">
                                        <img src="../Views/dashboard/dist/assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40">
                                    </div>
                                </div>
                            `);

                            // Mostrar el GIF de "escribiendo..."
                            $('.chat-body').append(`
                                <div class="row m-b-20 received-chat typing-indicator">
                                    <div class="col-auto p-r-0">
                                        <img src="../Views/dashboard/dist/assets/images/bot.png" alt="bot image" class="img-radius wid-40">
                                    </div>
                                    <div class="col">
                                        <div class="msg d-flex align-items-center m-0" style="width: 4rem; height: 3rem;">
                                            <img src="../Views/dashboard/dist/assets/images/typing.gif" alt="Typing..." class="typing-gif" style="width: 3rem; height: auto;">
                                        </div>
                                    </div>
                                </div>
                            `);

                            // Mueve el scroll hacia abajo después de agregar los mensajes
                            scrollToBottom();

                            // Enviar la pregunta a la API
                            $.ajax({
                                type: 'POST',
                                url: 'procesar_pregunta.php',
                                data: { pregunta: pregunta },
                                success: function (response) {
                                    // Reemplazar el GIF de "escribiendo..." con la respuesta del bot
                                    $('.typing-indicator').remove(); // Eliminar el indicador de escritura
                                    $('.chat-body').append(`
                                        <div class="row m-b-20 received-chat">
                                            <div class="col-auto p-r-0">
                                                <img src="../Views/dashboard/dist/assets/images/bot.png" alt="user image" class="img-radius wid-40">
                                            </div>
                                            <div class="col">
                                                <div class="msg">
                                                    <p class="m-b-0">${response}</p>
                                                </div>
                                                <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>${getFormattedTime()}</p>
                                            </div>
                                        </div>
                                    `);

                                    // Mueve el scroll hacia abajo después de agregar la respuesta
                                    scrollToBottom();
                                },
                                error: function () {
                                    // Manejar errores
                                    alert('Ocurrió un error al procesar la pregunta. Inténtalo de nuevo.');
                                }
                            });

                            // Limpiar el campo de entrada después de enviar la pregunta
                            $('#pregunta').val('');
                        }
                    }

                    function scrollToBottom() {
                        let chatMessages = document.querySelector('.chat-body');
                        if (chatMessages) {
                            chatMessages.scrollTop = chatMessages.scrollHeight;
                        }
                    }

                    function getFormattedTime() {
                        const now = new Date();
                        return now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });
                    }
                });


                </script>

                        <p class="text-muted m-b-0 text-center">
                            Aviso: Los resultados proporcionados por este chatbot pueden no ser precisos o completos. Por favor, verifica la información antes de tomar decisiones basadas en ella.
                        </p>
                </div>
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
