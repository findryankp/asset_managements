<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('notification', 'MessageController::showSweetAlertMessages');
$routes->get('/', 'TransactionController::index');

$routes->group('category', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'CategoryController::index');
    $routes->get('create', 'CategoryController::create');
    $routes->post('store', 'CategoryController::store');
    $routes->get('edit/(:num)', 'CategoryController::edit/$1');
    $routes->post('update/(:num)', 'CategoryController::update/$1');
    $routes->get('delete/(:num)', 'CategoryController::delete/$1');
});

$routes->group('transaction', function ($routes) {
    $routes->get('/', 'TransactionController::index');
    $routes->get('create', 'TransactionController::create');
    $routes->post('store', 'TransactionController::store');
    $routes->get('edit/(:num)', 'TransactionController::edit/$1');
    $routes->post('update/(:num)', 'TransactionController::update/$1');
    $routes->get('delete/(:num)', 'TransactionController::delete/$1');
});

$routes->group('rooms', function ($routes) {
    $routes->get('/', 'RoomController::index');
    $routes->get('create', 'RoomController::create');
    $routes->post('store', 'RoomController::store');
    $routes->get('edit/(:num)', 'RoomController::edit/$1');
    $routes->post('update/(:num)', 'RoomController::update/$1');
    $routes->get('delete/(:num)', 'RoomController::delete/$1');
});

$routes->group('locations', function ($routes) {
    $routes->get('/', 'LocationController::index');
    $routes->get('create', 'LocationController::create');
    $routes->post('store', 'LocationController::store');
    $routes->get('edit/(:num)', 'LocationController::edit/$1');
    $routes->post('update/(:num)', 'LocationController::update/$1');
    $routes->get('delete/(:num)', 'LocationController::delete/$1');
});

$routes->group('products', function ($routes) {
    $routes->get('/', 'ProductController::index');
    $routes->get('create', 'ProductController::create');
    $routes->post('store', 'ProductController::store');
    $routes->get('edit/(:num)', 'ProductController::edit/$1');
    $routes->post('update/(:num)', 'ProductController::update/$1');
    $routes->get('delete/(:num)', 'ProductController::delete/$1');
});

