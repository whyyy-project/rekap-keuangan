<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PagesController::index');
$routes->get('/santri', 'PagesController::santri');
$routes->get('/blank', 'PagesController::blank');
$routes->get('/login', 'PagesController::login');
