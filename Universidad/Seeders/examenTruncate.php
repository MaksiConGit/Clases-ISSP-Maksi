<?php

require_once __DIR__ .'/../Model/Examen.php';

Examen::truncate();

header('Location: ../Controllers/indexDashboard.php');