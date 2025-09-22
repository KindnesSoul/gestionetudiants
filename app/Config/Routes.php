<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'accueil']);
$routes->get('test', 'Home::test');
/*php spark make:controller*/

//ajout etudiants
$routes->get('nouvel-etudiant', 'Etudiant::ajout', ['as' => 'new']);
$routes->post('create-etudiant', 'Etudiant::create', ['as' => 'create_user']);

//modification etudiants
$routes->get('modifier-etudiant-(:num)', 'Etudiant::modif/$1', ['as' => 'modif_user']);
$routes->post('update-etudiant', 'Etudiant::update', ['as' => 'update_user']);


//supression etudiants
$routes->get('supprimer-etudiant-(:num)', 'Etudiant::delete/$1', ['as' => 'delete']);
