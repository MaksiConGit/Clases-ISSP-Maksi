<?php

require_once __DIR__ .'/../Model/Alumno.php';

Alumno::truncate();

header('Location: ../Controllers/indexDashboard.php');