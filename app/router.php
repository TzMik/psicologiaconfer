<?php

class Router {
	protected $controller = 'HomeController';
	protected $method = 'index';
	protected $params = [];

	public function __construct() {
		// Este constructor está vacío por ahora, pero podría usarse para configuraciones iniciales.
	}

	public function run() {
		$url = $this->parseUrl();

		if (empty($url[0])) {
			$url[0] = 'home';
		}

		// Busca el controlador en la carpeta /controllers
		if (file_exists('../app/controllers/' . ucwords($url[0]) . 'Controller.php')) {
			$this->controller = ucwords($url[0]) . 'Controller';
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';

		// Crea una instancia del controlador
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
			return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
		return [];
	}
}
?>
