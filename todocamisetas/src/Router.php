<?php

require_once __DIR__ . '/core/Response.php';

class Router {

    public static function resolve($method, $uri) {

        // =========================
        // CAMISETAS
        // =========================
        if ($method === 'GET' && $uri === '/camisetas') {
            CamisetaController::index();
        }

        if ($method === 'POST' && $uri === '/camisetas') {
            CamisetaController::store();
        }

        // =========================
        // CLIENTES
        // =========================
        if ($method === 'GET' && $uri === '/clientes') {
            ClienteController::index();
        }

        if ($method === 'POST' && $uri === '/clientes') {
            ClienteController::store();
        }

        // =========================
        // TALLAS
        // =========================
        if ($method === 'GET' && $uri === '/tallas') {
            TallaController::index();
        }

        if ($method === 'POST' && $uri === '/tallas') {
            TallaController::store();
        }

        // =========================
        // PRECIO DINÁMICO
        // =========================
        if ($method === 'GET' && preg_match('/\/precio\/(\d+)\/(\d+)/', $uri, $matches)) {
            CamisetaController::precioFinal($matches[1], $matches[2]);
        }

        Response::json(["error" => "Ruta no encontrada"], 404);
    }
}
