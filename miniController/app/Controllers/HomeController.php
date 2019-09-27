<?php 
class HomeController extends Controller{
	

	public function index() {
		parent::view('home');
	}
	public function getUsers() {
		$models    = $this->model('User')->all();
		return parent::view('pengguna', ['user' => $models]);
	}

}