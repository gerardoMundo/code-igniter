<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/perfil', 'Perfil::index');
$routes->get('/formulario', 'Formulario::index');
$routes->resource('formulario');

