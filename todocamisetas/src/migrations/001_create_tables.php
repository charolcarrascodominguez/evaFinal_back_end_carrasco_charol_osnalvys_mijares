<?php

require_once __DIR__ . '/../config/Database.php';

class CreateTables {

    public static function up() {

        $db = Database::getConnection();

        $db->exec("
        CREATE TABLE IF NOT EXISTS clientes (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre_comercial VARCHAR(100) NOT NULL,
            rut VARCHAR(20) UNIQUE NOT NULL,
            direccion VARCHAR(150) NOT NULL,
            categoria ENUM('Regular','Preferencial') NOT NULL,
            contacto_nombre VARCHAR(100),
            contacto_email VARCHAR(100),
            porcentaje_oferta DECIMAL(5,2) DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");

        $db->exec("
        CREATE TABLE IF NOT EXISTS camisetas (
            id INT AUTO_INCREMENT PRIMARY KEY,
            titulo VARCHAR(150) NOT NULL,
            club VARCHAR(100) NOT NULL,
            pais VARCHAR(100) NOT NULL,
            tipo VARCHAR(100),
            color VARCHAR(100),
            precio DECIMAL(10,2) NOT NULL,
            precio_oferta DECIMAL(10,2),
            detalles TEXT,
            codigo_producto VARCHAR(50) UNIQUE NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");

        $db->exec("
        CREATE TABLE IF NOT EXISTS tallas (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(10) NOT NULL
        )");

        $db->exec("
        CREATE TABLE IF NOT EXISTS camiseta_talla (
            camiseta_id INT,
            talla_id INT,
            PRIMARY KEY (camiseta_id, talla_id),
            FOREIGN KEY (camiseta_id) REFERENCES camisetas(id) ON DELETE CASCADE,
            FOREIGN KEY (talla_id) REFERENCES tallas(id) ON DELETE CASCADE
        )");
    }
}
