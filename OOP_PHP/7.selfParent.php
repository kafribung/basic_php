<?php 
class robot {
  	   // property
    protected $nama;
    public $umur;
    public $suara;


   public function set_nama($nama) {
    	  $this->nama = $nama;
 	}

  public function set_suara($suara) {
      $this->suara = $suara;
  }

  public function set_umur($umur) {
      $this->umur = $umur;
  }

public function get_suara() {
    return $this->suara;
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

       public function get_suara() {
            return "Namanya adalah = " .  $this->nama;
      }

      public function testing() {
          return parent::get_suara();
      }
}

// self:: adalah penanda bahwa fungsi ini adalah milik dari kealasnya
// parent:: milik dari orang tuanya
$robot = new robot;
$robot->set_suara("Gug gug gug gug");


$robotInherit = new robot_burung;
 echo $robotInherit->testing();


?>