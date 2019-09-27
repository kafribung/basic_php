<?php 
class robot {
  	   // property
     public $nama;
    public $umur;

    // Konstruktor akan dipanggil berulang-uang  selama objeknya di panggil
   	public function __construct($nama, $umur) {
   			$this->nama = $nama;
   			$this->umur = $umur;
     }

   	public function set_nama($nama) {
    	  $this->nama = $nama;
 	}

 	public function get_nama() {
    	  return $this->nama;
	}

	public function get_umur() {
		return $this->umur;
	}

}

  // Cara mengakses class
$robot = new robot("Kafriansyah" , 20);
$robot2 = new robot("Fuadadnansyah"  , 10);


$robot2->set_nama("Aidil");
echo $robot->get_nama();
echo $robot->get_umur();

echo $robot2->get_nama();
echo $robot2->get_umur();


?>