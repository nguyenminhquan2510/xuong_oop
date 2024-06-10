<?php

use Ductong\FpolyBaseWeb3014\Controllers\Client\HomeController;
use Ductong\FpolyBaseWeb3014\Controllers\Client\LoginController;

$router->mount('/client', function () use ($router) {
    $router->get('/',                   HomeController::class . '@index');
    $router->get('/login',              LoginController::class . '@showFormLogin');
    $router->get('/logout',             LoginController::class . '@logout');
    $router->post('/handlelogin',      LoginController::class . '@login');
    $router->get('/thethao',            HomeController::class . '@tinTheThao');
    $router->get('/suckhoe',            HomeController::class . '@tinSucKhoe');
    $router->get('/trongnuoc',          HomeController::class . '@tinTrongNuoc');
    $router->get('/ngoainuoc',          HomeController::class . '@tinNgoaiNuoc');
    $router->get('/{id}/{idDirectory}/show',          HomeController::class . '@show');

});
