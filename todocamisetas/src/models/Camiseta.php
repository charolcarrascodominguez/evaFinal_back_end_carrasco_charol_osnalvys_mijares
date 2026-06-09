<?php

require_once __DIR__ . '/../config/Database.php';

class Camiseta {

    public static function all() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM camisetas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM camisetas WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::getConnection();

        $stmt = $db->prepare("
            INSERT INTO camisetas 
            (titulo, club, pais, tipo, color, precio, precio_oferta, detalles, codigo_producto)
            VALUES 
            (:titulo, :club, :pais, :tipo, :color, :precio, :precio_oferta, :detalles, :codigo_producto)
        ");

        return $stmt->execute($data);
    }
}