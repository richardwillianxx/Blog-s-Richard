<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use FastRoute\RouteCollector;

return function(RouteCollector $r) {
    $r->addRoute('GET', '/', [HomeController::class, 'index']);
    $r->addRoute('GET', '/contato', [HomeController::class, 'contato']);
    $r->addRoute('GET', '/sobre', [HomeController::class, 'sobre']);
   
    
    $r->addRoute('GET', '/login', [LoginController::class, 'index']);
};