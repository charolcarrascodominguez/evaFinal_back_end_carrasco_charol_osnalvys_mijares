<?php

require_once 'controllers/CamisetaController.php';
require_once 'controllers/ClienteController.php';
require_once 'controllers/TallaController.php';
require_once 'Router.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

Router::resolve($method, $uri);
