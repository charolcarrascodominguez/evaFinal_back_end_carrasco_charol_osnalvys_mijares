<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../core/Response.php';

class TallaController {

    public static function index() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM tallas");
        Response::json($stmt->fetchAll(PDO::FETCH_ASSOC));
    }

    public static function store() {

        $data = json_decode(file_get_contents("php://input"), true);

        if (!isset($data['nombre'])) {
            Response::json(["error" => "Nombre de talla obligatorio"], 400);
        }

        $db = Database::getConnection();

        $stmt = $db->prepare("INSERT INTO tallas (nombre) VALUES (:nombre)");
        $stmt->execute(['nombre' => $data['nombre']]);

        Response::json(["message" => "Talla creada correctamente"], 201);
    }
}
