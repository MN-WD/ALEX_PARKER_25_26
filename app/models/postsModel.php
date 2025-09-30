<?php

namespace App\Models\PostsModel;
use \PDO;

function findAll (PDO $db):array {
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT 10;";
    return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}