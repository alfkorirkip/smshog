<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['filter' => 'session'], function ($routes) {

    $routes->get('/', 'Dashboard::index');

    $routes->resource('contacts');

    $routes->resource('groups');

    $routes->resource('campaigns');

    $routes->resource('templates');

    $routes->resource('users');

    $routes->get('reports', 'Reports::index');

    $routes->get('settings', 'Settings::index');

});

service('auth')->routes($routes);
