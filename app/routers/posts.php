<?php

use \App\Controllers\PostsController;

include '../app/controllers/postsController.php';

switch ($_GET['posts']):
    // Détails d'un post
    case 'show':
        PostsController\showAction($db, $_GET['id']);
        break;

    // Formulaire d'ajout d'un post
    case 'addForm':
        PostsController\addFormAction($db);
        break;

    // Ajout d'un post : insert
    case 'addInsert':
        PostsController\addInsertAction($db, $_POST);
        break;
    
    // Suppression d'un post : delete
    case 'delete':
        PostsController\deleteAction($db, $_GET['id']);
        break;

    default:
        PostsController\indexAction($db);
        break;
endswitch;