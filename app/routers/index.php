<?php
// ROUTEUR PRINCIPAL

// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: homeAction
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\indexAction($db);