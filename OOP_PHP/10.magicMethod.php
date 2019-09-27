<?php 
class robot {
  	   // property
     public $suara;
     public $umur;

     public function __construct($suara, $umur){
     		$this->suara = $suara;
     		$this->umur  = $umur;
     }

     // ~~~~~~~~~~~~~~~~~~~~magic method~~~~~~~~~~~~~~~
    public function __toString()
    {
        return $this->suara;
    }
}

// Magic method digunakan pada saat pemanggilan objeknya sendiri, bagaimana caranya di berlakukan
$robot = new robot("Puuuuuuukkk", 20);
echo $robot;
?>