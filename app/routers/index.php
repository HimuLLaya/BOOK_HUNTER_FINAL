<?php
//router principal


// Route par defaut
// Patern: /
// CTRL: pagesController
// Action: homeAction

include_once '../app/controllers/pagesController.php';
\App\controllers\pagesController\homeAction($connexion);