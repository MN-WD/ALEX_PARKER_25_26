<?php

namespace App\Controllers\PagesController;
use \PDO;

function homeAction (PDO $db) {
    // Demande de données aux modèles
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($db);

    // Chargement de la vue 'home' dans $content
    GLOBAL $content, $title;
    $title = "Home Page";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}