<?php

namespace App\Controllers\PostsController;
use \PDO, \App\Models\PostsModel;

function indexAction (PDO $db) {
    // Demande de données aux modèles : posts
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($db, 10);

    // Demande de données aux modèles : catégories
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($db);

    // Chargement de la vue 'home' dans $content
    GLOBAL $content, $title;
    $title = "Home Page";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction (PDO $db, string $id) {
    // Demande de données aux modèles : posts
    include_once '../app/models/postsModel.php';
    $post = \App\Models\PostsModel\findOneById($db, $id);

    // Demande de données aux modèles : catégories
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($db);

    // Chargement de la vue 'home' dans $content
    GLOBAL $content, $title;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function addFormAction (PDO $db) {
    // Chargement des catégories
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($db);

    // Chargement de la vue addForm dans $content
    GLOBAL $content, $title;
    $title = POSTS_ADDFORM_TITLE;
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();
}

function addInsertAction (PDO $db, array $data) {
    // Demande au modèle d'ajouter un post
    include_once '../app/models/postsModel.php';
    $id = PostsModel\insertOne($db, $data);
    
    // Redirection vers la liste des posts
    header('Location: ' . BASE_URL);
}

function deleteAction (PDO $db, int $id) {
    // Demande au modèle de supprimer le post
    include_once '../app/models/postsModel.php';
    $return = PostsModel\deleteOneById($db, $id);

    // Redirection vers la liste des posts
    header('Location: ' . BASE_URL);
}