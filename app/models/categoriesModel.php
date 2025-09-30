<?php

namespace App\Models\CategoriesModel;
use \PDO;

function findAll (PDO $db): array {
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC;";
    $rs = $db->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}