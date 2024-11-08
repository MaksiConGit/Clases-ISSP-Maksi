<?php

require_once __DIR__ .'/../Model/Nota.php';

Nota::truncate();

header('Location: ../Controllers/indexDashboard.php');