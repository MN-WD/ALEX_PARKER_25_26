<?php

use App\Controllers\PostsController;

include '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($db, $_GET['id']);
        break;
    default:
        PostsController\indexAction($db);
        break;
endswitch;