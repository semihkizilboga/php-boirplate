<?php
$router = new Buki\Router\Router([
    'paths' => [
        'controllers' => 'application/controllers'
    ]
]);
$ek = "/php";

$router->any($ek . '/', 'dashboard@index');

$router->any($ek . '/users', 'users@index');
$router->any($ek . '/users/update/(:any)', 'users@update');
$router->any($ek . '/users/delete/(:any)', 'users@delete');


$router->run();
