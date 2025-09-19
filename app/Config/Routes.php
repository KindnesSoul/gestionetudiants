<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test','Home::test');
/*php spark make:controller*/
$routes->get('accueil', 'Home::index');

$routes->get('nouvel','Etudiant::ajout');

$routes->get('modifier-(:num)','Etudiant::modif/$1');

$routes->get('supprimer-(:num)','Etudiant::delete/$1');

