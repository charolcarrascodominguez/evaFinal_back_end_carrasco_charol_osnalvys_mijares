<?php

require_once __DIR__ . '/../models/Cliente.php';
require_once __DIR__ . '/../core/Response.php';

class ClienteController {

    public static function index() {
        Response::json(Cliente::all());
    }

    public static function store() {

        $data = json_decode(file_get_contents("php://input"), true);

        if (!isset($data['nombre_comercial'], $data['rut'], $data['direccion'], $data['categoria'])) {
            Response::json(["error" => "Campos obligatorios faltantes"], 400);
        }

        Cliente::create($data);

        Response::json(["message" => "Cliente creado correctamente"], 201);
    }
}
