<?php 

class Validation {
	public $_passed = false;
	public $_errors = array( );


	public function check($items = array() ) 
	{
		foreach ($items as $item => $rules) {
			foreach ($rules as $rule => $value) {
			
				switch ($rule) {
					case "required":
						if ( trim(Input::get($item) ) == false && $value == true) {
							$this->addError(" $item wajib diisi");
						}
						break;
					case 'max':
						if (strlen( Input::get($item)) > $value) {
							$this->addError("$item maximal $value  karekter");
						}
						break;
					case 'min':
						if ( strlen( Input::get($item)) < $value) {
							$this->addError(" $item minimal $value  karekter");
						}
						break;
					case 'match':
						if ( Input::get($item) !== Input::get($value) ){
							$this->addError(" Karakter $item tidak sama dengan $value ");
						}
						break;
					
					default:
					break;
					
				}

			}
		}
		//end first foreach
		// Menguji apaka ada error

		if ( empty($this->_errors) ) {
			$this->_passed = true;	 
		} 

		return $this;	
	}


// Function tambahan
	private function addError($data) 
	{
		$this->_errors[] = $data;
	}

	public function error() 
	{
		return $this->_errors;
	}

	public function passed()
	{
	return $this->_passed;

	}


}



 ?>