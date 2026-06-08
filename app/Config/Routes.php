<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', function () {
    return view('index_ui');
});

$routes->get('about', function () {
    return view('pages/about');
});

$routes->get('rooms', function () {
    return view('pages/rooms');
});

$routes->get('restaurant', function () {
    return view('pages/restaurant');
});

$routes->get('mawa', function () {
    return view('pages/mawa');
});

$routes->get('baithak', function () {
    return view('pages/baithak');
});

$routes->get('banquet', function () {
    return view('pages/banquet');
});

$routes->get('lawn', function () {
    return view('pages/lawn');
});

$routes->get('contact', function () {
    return view('pages/contact');
});

$routes->get('book-now', function () {
    return view('pages/book-now');
});

$routes->get('privacy', function () {
    return view('pages/privacy-policy');
});

$routes->get('term-condition', function () {
    return view('pages/tearm-condition');
});

$routes->get('rooms', 'Rooms::rooms');