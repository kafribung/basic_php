<?php 
class robot {
  	   // property
    protected $nama;
    public $umur;
    public $mesin;


   public function set_nama($nama) {
    	  $this->nama = $nama;
 	}

  public function set_mesin($mesin) {
      $this->mesin = $mesin;
  }

  public function set_umur($umur) {
      $this->umur = $umur;
  }

public function get_mesin() {
    return $this->mesin;
}

 	public function get_nama() {
    	  return $this->nama;
	}

	public function get_umur() {
		return $this->umur;
	}

}

class robot_burung extends robot{
        function get_terbang() {
            echo "Robot ini bisa terbang";
       }

       public function get_nama() {
            return "Namanya adalah = " .  $this->nama;
      }
}

// Rung lingkup :
// 1. public = bisa diakses disemua lini programana
// 2. private = hanya bisa diakses dikelasnya sendiri
// 3. protected = hanya bisa diakses dikelasnya dan anaknya
$robot = new robot;
$robot->set_nama("ani");


$robotInherit = new robot_burung;
echo $robotInherit->get_nama();

?>