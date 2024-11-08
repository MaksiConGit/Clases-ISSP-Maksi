<?php

require_once __DIR__ .'/../Model/Materia.php';

Materia::truncate();

header('Location: ../Controllers/indexDashboard.php');