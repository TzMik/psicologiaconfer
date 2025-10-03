<?php
namespace Fer\controllers;

class FaqController extends Controller {
	public function index($name = '') {
		// En un futuro, aquí podrías cargar un modelo para obtener datos
		// $userModel = $this->model('User');
		// $user = $userModel->find($name);

		// Por ahora, simplemente llamamos a la vista
		$this->view('faq/index', ['name' => $name]);
	}
}
