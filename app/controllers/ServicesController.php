<?php
namespace Fer\controllers;

class ServicesController extends Controller {
    public function index($name = '') {
        // En un futuro, aquí podrías cargar un modelo para obtener datos
        // $userModel = $this->model('User');
		// $user = $userModel->find($name);

		// Por ahora, simplemente llamamos a la vista
		$this->view('services/index', ['name' => $name]);
	}
}
