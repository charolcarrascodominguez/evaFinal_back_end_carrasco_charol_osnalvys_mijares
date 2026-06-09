<?php

require_once __DIR__ . '/../config/Database.php';

class Migration {

    public static function run() {
        echo "Ejecutando migraciones...\n";

        require_once __DIR__ . '/001_create_tables.php';

        CreateTables::up();

        echo "Migraciones ejecutadas correctamente ✅\n";
    }
}

Migration::run();
