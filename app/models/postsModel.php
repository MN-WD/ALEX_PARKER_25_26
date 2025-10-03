<?php

namespace App\Models\PostsModel;
use \PDO;

function findAll (PDO $db, int $limit = 10): array {
    $sql = "SELECT p.*, p.id AS postID, c.id AS categoryID, c.name
            FROM posts p
            INNER JOIN categories c ON p.category_id = c.id
            ORDER BY p.created_at DESC
            LIMIT :limit;";
    $rs = $db->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById (PDO $db, string $id): array {
    $sql = "SELECT p.*, p.id AS postID, c.id AS categoryID, c.name
            FROM posts p
            INNER JOIN categories c ON p.category_id = c.id
            WHERE p.id = :id;";
    $rs = $db->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}

function insertOne (PDO $db, array $data) {
    $sql = "INSERT INTO posts
            SET
            title = :title,
            text = :text,
            created_at = NOW(),
            quote = :quote,
            category_id = :category_id;";
    $rs = $db->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_STR);
    return $rs->execute();
}

function deleteOneById (PDO $db, int $id) {
    $sql = "DELETE FROM posts
            WHERE id = :id;";
    $rs = $db->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
}