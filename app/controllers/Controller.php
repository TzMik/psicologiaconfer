<?php
namespace Fer\controllers;

class Controller {
	/**
	 * Carga un archivo de vista.
	 */
	public function view($view, $data = []) {
		if (file_exists('../app/views/' . $view . '.php')) {
			require_once '../app/views/' . $view . '.php';
		} else {
			die('La vista no existe.');
		}
	}
}
