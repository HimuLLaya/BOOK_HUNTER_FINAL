<?php
namespace App\Controllers\authorsController;

use \PDO;

function indexAction(PDO $connexion){

    // Je vais demander des données aux modèles
    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findall($connexion, 4);

    // Je charge la vue 'home' dans  $content
    global $content, $title;
    $title = "Authors";
    ob_start();
    include '../app/views/authors/index.php';
    $content = ob_get_clean();
}

