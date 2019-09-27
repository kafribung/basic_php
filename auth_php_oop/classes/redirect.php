<?php 
class Redirect {
	public static function to ($tujuan)
	{
		header("Location: " . $tujuan . ".php");
	}
}

 ?>