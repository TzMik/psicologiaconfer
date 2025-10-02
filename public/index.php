<?php
// Muestra errores para facilitar la depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Carga el enrutador
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Fer\Router;

// Crea una instancia del enrutador
$router = new Router();

// Ejecuta el enrutador para manejar la solicitud actual
$router->run();
?>
