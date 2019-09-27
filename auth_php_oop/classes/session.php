<?php 
class Session 
{
	public static function cek_session($nama)
	 {
	 	return (isset($_SESSION[$nama])) ? true : false;
	}

	public static function set($nama, $nilai) 
	{
		return $_SESSION[$nama] = $nilai;
	}

	public static function get($nama) 
	{
		return $_SESSION[$nama];
	}

	public static function flash($name, $isi= "") 
	{
		if (self::cek_session($name)) {
			$session = self::get($name);
			self::delete($name);
			return $session;
		} else {
			self::set($name, $isi);
		}

	}

	public static function delete($name)
	{
		if (self::cek_session($name)) {
			session_unset($name);
		}
	}

}


 ?>