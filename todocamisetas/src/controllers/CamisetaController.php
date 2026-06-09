<?php

require_once __DIR__ . '/../models/Camiseta.php';
require_once __DIR__ . '/../models/Cliente.php';
require_once __DIR__ . '/../core/Response.php';

class CamisetaController {

    public static function index() {
        Response::json(Camiseta::all());
    }

    public static function store() {

        $data = json_decode(file_get_contents("php://input"), true);

        if (!isset($data['titulo'], $data['precio'], $data['codigo_producto'])) {
            Response::json(["error"=>"Campos obligatorios faltantes"], 400);
        }

        Camiseta::create($data);

        Response::json(["message"=>"Camiseta creada correctamente"], 201);
    }

    public static function precioFinal($camiseta_id, $cliente_id) {

        $camiseta = Camiseta::find($camiseta_id);
        $cliente = Cliente::find($cliente_id);

        if (!$camiseta || !$cliente) {
            Response::json(["error"=>"Datos no encontrados"], 404);
        }

        $precioFinal = $camiseta['precio'];

        if ($cliente['categoria'] === "Preferencial" 
            && $camiseta['precio_oferta']) {
            $precioFinal = $camiseta['precio_oferta'];
        }

        Response::json([
            "camiseta" => $camiseta['titulo'],
            "cliente" => $cliente['nombre_comercial'],
            "precio_final" => $precioFinal
        ]);
    }
}
