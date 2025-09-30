<?php
// ROUTEUR PRINCIPAL

// ROUTE DES POSTS
// PATTERN: /?photos
if (isset($_GET['posts'])) :
    include_once '../app/routers/posts.php';

// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: homeAction
else :
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($db);
endif;