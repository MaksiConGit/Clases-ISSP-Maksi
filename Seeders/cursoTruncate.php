<?php

require_once __DIR__ .'/../Model/Curso.php';

Curso::truncate();

header('Location: ../Controllers/indexDashboard.php');