<?php
namespace Fer;

class Router {
	protected $controller = 'Home'; // Ahora solo el nombre base sin 'Controller'
	protected $method = 'index';
	protected $params = [];
	// 1. Nueva propiedad para el namespace base de tus controladores
	protected $namespace = 'Fer\\controllers\\'; 

	public function __construct() {
		// Este constructor está vacío por ahora.
	}

	public function run() {
		$url = $this->parseUrl();

		if (empty($url[0])) {
			$url[0] = 'Home'; // Usamos 'Home' por convención
		}

		// Prepara el nombre del controlador (Ej: 'HomeController')
		$controllerName = ucwords($url[0]) . 'Controller';
		
		// 2. Comprobación y Asignación del Controlador:
		// Se usa class_exists para verificar si la clase *con* el namespace existe.
		// Esto requiere que tengas configurado un autoloader (como el de Composer)
		// que sepa dónde encontrar el archivo 'HomeController.php' para 'App\Controllers\HomeController'.
		
		$fullControllerName = $this->namespace . $controllerName;

		if (class_exists($fullControllerName)) {
			$this->controller = $fullControllerName;
			unset($url[0]);
		} else {
            // Si el controlador por la URL no existe, se mantiene el default (HomeController)
            // y se construye su nombre completo con el namespace.
            $this->controller = $this->namespace . 'HomeController'; 
		}
        
        // ******************************************************************************
        // NOTA IMPORTANTE: Si estás usando un autoloader, la siguiente línea ya NO es necesaria:
		// require_once '../app/controllers/' . $controllerName . '.php'; 
        // Si no usas autoloader, tendrías que incluirlo manualmente, 
        // pero se recomienda usar autoloader con namespaces.
        // ******************************************************************************

		// Crea una instancia del controlador usando el nombre completo con el namespace
		$this->controller = new $this->controller;

		// Revisa si el método existe en el controlador
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// Obtiene los parámetros de la URL
		$this->params = $url ? array_values($url) : [];

		// Llama al método del controlador con los parámetros
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	/**
	 * Parsea la URL para obtener el controlador, método y parámetros.
	 */
	public function parseUrl() {
		if (isset($_GET['url'])) {
			// Sanitiza y divide la URL, limpiando cualquier barra final.
			return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
		return [];
	}
}
