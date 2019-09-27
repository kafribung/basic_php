<?php 

class Database {
	private  static $INSTANCE = null;
	private $mysqli,
	$HOST ="localhost", 
	$USER  ="root", 
	$PASS  ="", 
	$DB      ="login_register_oop";

	public function __construct() 
	{
		$this->mysqli = new mysqli($this->HOST, $this->USER, $this->PASS, $this->DB);
		if (mysqli_connect_error() ) {
			die("Database gagal di load");
		}
	}

	public static function getInstance() 
	{
		if (!isset(self::$INSTANCE) ) {
			self::$INSTANCE = new Database();
		} 
		return self::$INSTANCE;
	}

	// Instert data untuk register
	public function insert_data( $table , $fields = array() ) 
	{		
			// Mengambil key dari arary yang dikirim, dan merubah ke string
		$columns = implode(", " , array_keys($fields) );

			// menambahkan tanda petik pada value
		$valueArray= array();
		$i= 0;
		foreach ($fields as $key => $value) {
			if (is_int($value)) {
				$valueArray[$i] = $this->escape($value)  ;	
			} else {
				$valueArray[$i] = "'" . $this->escape($value)  . "'";
			}
			$i++;
		}
			// Mengambil value dari arry
		$value = implode(" , " ,  $valueArray );

		$query = "INSERT INTO $table ($columns) VALUES ($value)";

		return $this->run_query($query);
	}
	public function login_data($table, $columns = "", $username= "") 
	{
		if ($columns != "") {
			if (!is_int($username)) $username = "'" . $username . "'";
			$query = "SELECT * FROM $table  WHERE $columns = $username";
			$result = $this->mysqli->query($query);
			$row    = $result->fetch_assoc();

			return $row;
		} else {
			$query = "SELECT * FROM $table";
			$result = $this->mysqli->query($query);
			
			while ($row  = $result->fetch_assoc() ) {
				$results[]= $row;
			}
			return $results;
		}
		
	}

	public function update_data($table, $fields=array(), $id)
	{
		
			// menambahkan tanda petik pada value
		$valueArray= array();
		$i= 0;
		foreach ($fields as $key => $value) {
			if (is_int($value)) {
				$valueArray[$i] = $key . '=' .  $this->escape($value)  ;	
			} else {
				$valueArray[$i] = $key . "='" . $this->escape($value)  . "'";
			}
			$i++;
		}
			// Mengambil value dari arry
		$value = implode(" , " , $valueArray );


		$query = "UPDATE $table SET $value WHERE id = $id" ;
		return $this->run_query($query);

	}

	// Run query
	public function run_query($query)
	{
		if ($this->mysqli->query($query) ) return true;
		else return false;
	}

	// Fungsi SQL Injection
	public function escape ($name) 
	{
		return $this->mysqli-> real_escape_string($name);
	}


}

?>