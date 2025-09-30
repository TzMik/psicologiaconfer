<?php
// Muestra errores para facilitar la depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Carga el enrutador
require_once '../app/router.php';

// Crea una instancia del enrutador
$router = new Router();

// Ejecuta el enrutador para manejar la solicitud actual
$router->run();
?>
