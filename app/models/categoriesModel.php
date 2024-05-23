<?php
namespace App\Models\categoriesModel;

use \PDO;
function findAll(PDO $connexion): array{
    $sql ="SELECT *
            FROM categories
            ORDER BY created_at ASC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}