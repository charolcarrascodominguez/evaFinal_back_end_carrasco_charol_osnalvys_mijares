<?php

class Database {

    private static $instance = null;

    public static function getConnection() {

        if (self::$instance === null) {
            self::$instance = new PDO(
                "mysql:host=db;dbname=todocamisetas",
                "root",
                "root",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }

        return self::$instance;
    }
}
