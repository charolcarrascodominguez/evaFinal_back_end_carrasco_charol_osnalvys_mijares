<?php

require_once __DIR__ . '/../config/Database.php';

class Cliente {

    public static function all() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM clientes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::getConnection();

        $stmt = $db->prepare("
            INSERT INTO clientes 
            (nombre_comercial, rut, direccion, categoria, contacto_nombre, contacto_email, porcentaje_oferta)
            VALUES 
            (:nombre_comercial, :rut, :direccion, :categoria, :contacto_nombre, :contacto_email, :porcentaje_oferta)
        ");

        return $stmt->execute($data);
    }
}
