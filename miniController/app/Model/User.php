<?php 
class User {
	private $_db;
	public function __construct()
	{
		$this->_db = Database::getInstance();

	}

	public function all() 
	{
		return $this->_db->all('users');
	}

}