<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('languages/', 'Languages::get');
$routes->get('languages', 'Languages::get');
$routes->post('runs', 'Runs::post');