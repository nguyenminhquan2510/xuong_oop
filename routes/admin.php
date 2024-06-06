<?php

use Ductong\FpolyBaseWeb3014\Controllers\Admin\DashboardControllers;
use Ductong\FpolyBaseWeb3014\Controllers\Admin\UserController;
use Ductong\FpolyBaseWeb3014\Controllers\Admin\ContentController;
use Ductong\FpolyBaseWeb3014\Controllers\Admin\DirectoryController;

$router->mount('/admin', function () use ($router) {
    $router->get('/',               DashboardControllers::class . '@dashboard');
    
    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');
        $router->get('/create',         UserController::class . '@create');
        $router->post('/store',         UserController::class . '@store');
        $router->get('/{id}/show',      UserController::class . '@show');
        $router->get('/{id}/edit',      UserController::class . '@edit');
        $router->post('/{id}/update',   UserController::class . '@update');
        $router->get('/{id}/delete',    UserController::class . '@delete');
    });
    $router->mount('/content', function () use ($router) {
        $router->get('/',               ContentController::class . '@index');
        $router->get('/create',         ContentController::class . '@create');
        $router->post('/store',         ContentController::class . '@store');
        $router->get('/{id}/show',      ContentController::class . '@show');
        $router->get('/{id}/edit',      ContentController::class . '@edit');
        $router->post('/{id}/update',   ContentController::class . '@update');
        $router->get('/{id}/delete',    ContentController::class . '@delete');
    });
    $router->mount('/directory', function () use ($router) {
        $router->get('/',               DirectoryController::class . '@index');
        $router->get('/create',         DirectoryController::class . '@create');
        $router->post('/store',         DirectoryController::class . '@store');
        $router->get('/{idDirectory}/show',      DirectoryController::class . '@show');
        $router->get('/{idDirectory}/edit',      DirectoryController::class . '@edit');
        $router->post('/{idDirectory}/update',   DirectoryController::class . '@update');
        $router->get('/{idDirectory}/delete',    DirectoryController::class . '@delete');
    });
    
});