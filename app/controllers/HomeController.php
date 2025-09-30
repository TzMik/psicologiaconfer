<?php

class HomeController {
	public function index($name = '') {
		// En un futuro, aquí podrías cargar un modelo para obtener datos
		// $userModel = $this->model('User');
		// $user = $userModel->find($name);

		// Por ahora, simplemente llamamos a la vista
		$this->view('home/index', ['name' => $name]);
	}

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
?>
