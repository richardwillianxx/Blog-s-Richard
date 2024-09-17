<?php

use App\Controllers\HomeController;
use FastRoute\RouteCollector;

return function(RouteCollector $r) {
    $r->addRoute('GET', '/', [HomeController::class, 'index']);
    $r->addRoute('GET', '/contato', [HomeController::class, 'contato']);
    $r->addRoute('GET', '/sobre', [HomeController::class, 'sobre']);
    // Adicione mais rotas aqui
};