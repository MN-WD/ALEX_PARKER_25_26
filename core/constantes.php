<?php

define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . explode('index.php', $_SERVER['PHP_SELF'])[0]);

define('POSTS_INDEX_TITLE', "Home page");
define('POSTS_ADDFORM_TITLE', "Add a post");
define('POSTS_EDITFORM_TITLE', "Edit a post");