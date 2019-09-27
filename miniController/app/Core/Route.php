<?php 
Class Route {

	protected $controller = 'homeController';
	protected $method     = 'index';
	protected $parameter= array();
	public function __construct() 
	{
		if (isset($_GET['url'])) {
			$url = explode('/', filter_var(trim($_GET['url']),  FILTER_SANITIZE_URL) ) ;
			$url[0] = $url[0]. 'Controller';
			
		} else $url[0] = 'homeController' ;

		// Menegecek apakah controller ada  di folder controller atau tidak
		if (file_exists('../app/Controllers/' . $url[0] . '.php' ) ) {
			// jika ada maka variabel controller akan ditimpah
			$this->controller = $url[0];
		}  
		else 	{
			return require_once('../app/Views/Error/404.php');	
		}


		require_once ('../app/Controllers/'. $this->controller . '.php');

		$this->controller = new $this->controller;


		// Mengisi method
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
			}  
		}

		// Mengisi Parameter
		unset($url[0]);
		unset($url[1]);
		$this->parameter = $url;

		call_user_func_array([$this->controller, $this->method] , $this->parameter);

	}

}

?>