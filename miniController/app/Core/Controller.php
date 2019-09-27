<?php 

class Controller {
	public function view($file, $data=[] ) 
	{
		require_once('../app/Views/' . $file . '.php');
	}

	public function model($file) 
	{
		require_once('../app/Model/' .$file . '.php');
		return new $file;
		return new User();
	}
}