<?php
//router principal

//route des books
//Pattern: /?books
//CTRL : booksController
//ACTION : indexAction
if(isset($_GET['books'])):
    include_once '../app/controllers/booksController.php';
\App\controllers\booksController\indexAction($connexion);

// Route par defaut
// Patern: /
// CTRL: pagesController
// Action: homeAction
else:
include_once '../app/controllers/pagesController.php';
\App\controllers\pagesController\homeAction($connexion);
endif;