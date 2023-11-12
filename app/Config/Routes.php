<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Formulario::index');
$routes->get('/home', 'Home::index');
$routes->get('/perfil', 'Perfil::index');
$routes->get('/publication', 'Publication::index');
$routes->post('/formulario/login', 'Formulario::login');


