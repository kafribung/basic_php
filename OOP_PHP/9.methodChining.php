<?php 
class robot {
  	   // property
     public $suara;
     public $umur;

     public function __construct($suara, $umur){
     		$this->suara = $suara;
     		$this->umur  = $umur;
     		
     }

     public function set_suara($suara) {
     		$this->suara = $suara;
     		return $this;
     }

     public function set_umur($umur) {
     		$this->umur = $umur;
     }

     public function get_suara() {
     		return $this->suara;
     }

      public function get_umur() {
     		return $this->umur;
     }
}

// Method chining digunakan untuk memanggil objekt dalam satu line
// Agar bisa dilakukan harus ditambahkan return $this
$robot = new robot("Puuuuuuukkk", 20);

$robot->set_suara("Eeeeiiiii")->set_umur(50);
echo $robot->suara;
echo $robot->umur;




?>