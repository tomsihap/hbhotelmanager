<?php

$router = $container->getRouter();
$router->setNamespace('App\Controller');

/**
 * Routes de base
 */
$router->get('', 'PagesController@index'); // Page d'accueil contenant entre autres la liste des rooms

/**
 * Routes ROOM
 */
$router->get('/rooms/(\d+)', 'RoomsController@show'); // Affichage de 1 room
$router->get('/rooms/new', 'RoomsController@new'); // Formulaire de création de room
$router->post('/rooms', 'RoomsController@create'); // Traitement de la création de room
$router->post('/rooms/(\d+)/edit', 'RoomsController@edit'); // Édition d'une room
$router->get('/rooms/(\d+)/deleteClient', 'RoomsController@deleteClient'); // Suppression d'un client (édition d'une room)

/**
 * Routes CLIENT
 */

$router->run();