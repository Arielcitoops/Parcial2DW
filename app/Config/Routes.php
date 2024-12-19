<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*http://localhost/Parcial2DW/CVistasF1*/

$routes->get('/CVistasF1' ,'CVista::MMostrar1');

/*http://localhost/Parcial2DW/CFormsF1*/

$routes->get('/CFormsF1' ,'CForms::MMostrar1');

/*http://localhost/Parcial2DW/CResultF1*/

$routes->get('/CResultF1' ,'CResultado::MMostrar1');
