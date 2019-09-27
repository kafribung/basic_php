<?php 
class User {
	private $_db;

	public function __construct() 
	{
		$this->_db = Database::getInstance();
		
	}
	public function register_user($fields = array() )
	{
		if ( $this->_db -> insert_data('users', $fields) ) return true;
		else return false;
	}

	public function login_user($username, $password) 
	{
		$data = $this->_db -> login_data("users", "username", $username);
		 
		if (password_verify($password, $data["password"]) ) return true;
		else return false;
	}

	public function cek_nama($username) 
	{
		$data = $this->_db -> login_data("users", "username", $username);
		 if (empty($data) ) return false;
		 else return true;
	}

	public function is_admin($username)
	{
		$data = $this->_db ->login_data("users", "username", $username );
		if ($data["role"] == 1)  return true;
		else return false;
	}

	public function is_login()
	{
		if (Session::cek_session("username")) return true;
		else return false;	
	}

	public function get_data($username) 
	{
		if ($this->cek_nama($username)) {
			return $data = $this->_db ->login_data("users", "username", $username );
		} else return false;
	}

	public function update_password($fields = array(),  $id)
	{
		if ($this->_db->update_data("users",  $fields, $id)) return true;
		else return false;
	}

	public function get_user() {
		return $this->_db->login_data("users");
	}

}

 ?>