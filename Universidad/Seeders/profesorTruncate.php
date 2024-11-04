<?php

require_once __DIR__ .'/../Model/Profesor.php';

Profesor::truncate();

header('Location: ../Controllers/indexDashboard.php');