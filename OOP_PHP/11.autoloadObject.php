<?php 

// autoload  object merupakab fungsi yang bertujuan untuk mengload class object yang telah dibuat.

// tidak lagi menggunakan include_once atau require_once

	spl_autoload_register( fuction ($class_name) {
	  include $class_name . ".php");

}

 ?>