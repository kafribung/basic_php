<?php 
  class robot {
  	   // property
  		public $nama  = "Kafri Bung";
  		public $umur  = 20;

  		// method 
  		 public function nama_robot() {
  		 	 echo "Nama robotnya = " . $this->nama;
  		 }

  		 public function umur_robot() {
  		 	return $this->umur;
  		 }

  }

  // Cara mengakses class
  $robot = new robot;
  // echo "Nama= " . $robot->nama . " Umur = " . $robot->umur;
  echo $robot->nama_robot();
  echo $robot->umur_robot();
 ?>