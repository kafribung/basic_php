<?php 

class Database {
	private static $INSTANCE = null;
	private $mysqli;
	public function __construct()
	{
		$this->mysqli = new mysqli ('localhost', 'root', '', 'login_register_php') or die('ada error bosku');
	}

	public static function getInstance() 
	{
		if (!isset(self::$INSTANCE)) {
			self::$INSTANCE = new Database();
		}
		return self::$INSTANCE;
	}

	public function all($table) {
		$query   = "SELECT * FROM $table";
		$result  = $this->mysqli->query($query);

		while ($row = $result->fetch_assoc()) {
			$results[] = $row;
		}
		return $results;

	}


}