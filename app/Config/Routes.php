<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Formulario::index');
$routes->get('/home', 'Home::index');
$routes->get('/perfil', 'Perfil::index');
$routes->get('/publication', 'Publication::index');
$routes->get('/documents', 'Documents::index');
$routes->post('/documents', 'Documents::index');
$routes->delete('/documents/(:segment)', 'Documents::deleteDocument/$1');
$routes->post('/formulario/login', 'Formulario::login');


