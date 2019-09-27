<?php 
class robot {
  	   // property
  public $nama;
  public $umur;

  public function set_nama($nama) {
      $this->nama = $nama;
 }

 public function get_nama() {
      return $this->nama;
}


}

  // Cara mengakses class
$robot = new robot;
$robot2 = new robot;
$robot->set_nama("Kafriansyah");
echo $robot->get_nama();

$robot2->set_nama("Fuadadnansyah");
echo $robot2->get_nama();


?>