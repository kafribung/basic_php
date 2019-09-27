<?php 
class robot {
  	   // property
     public static $suara  = "Hi Hi Hi";

     public static function bersuara() {
            return "Gug gug gug";
     }


}

// Cara menampilkan object static tidak menggunakan tanda panah
print robot::$suara;

echo  robot::bersuara();


?>