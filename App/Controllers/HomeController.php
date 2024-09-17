<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        return require_once __DIR__ . '/../Views/home.php';
    }

    public function contato() {
        return require_once __DIR__ . '/../Views/contato.php';
    }

    public function sobre() {
        return require_once __DIR__ . '/../Views/sobre.php';
    }
}