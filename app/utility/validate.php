<?php

/**
* Server side validation class
*/
class Validate 
{
	private $_passed = false,
			$_error = array(),
			$_db = null;
	
	function __construct()
	{
		$this->_db = DB::getInstance();
	}

	public function check($source, $items = array()){
		foreach ($items as $item => $rules) {
			$display = '';
			foreach ($rules as $rule => $rule_value) {
				// trim this for string length
				$value = trim($source[$item]);

				// TODO: sanitize $item
				
				if($rule === 'display'){

					$display = $rule_value;
				}

				if($rule === 'required' && empty($value)){
					$this->addError("{$display} is required!");
				}else if(!empty($value)){
					switch ($rule) {
						case 'min':
							if(strlen($value) < $rule_value){
								$this->addError("{$display} must be a minimum of {$rule_value}.");
							}
							break;
						case 'mix':
							if(strlen($value) > $rule_value){
								$this->addError("{$display} must be a maximum of {$rule_value}.");
							}
							break;

						case 'matches':
							if($value != $source[$rule_value]){
								//TODO: get display of a the matching value 
								$this->addError("{$display} must match {$rule_value}.");
							}
							break;

						case 'unique':

						
								$check = $this->_db->get($rule_value, array($item, '=', $value));
								// if anything exists 
								if($check->count()){

									$this->addError("{$display} must be unique.");
								}
								
								break;	
						
						default:
							break;
					}
				}
				
			}
		}
		// if there is no value in the error array that means validation has passed!
		if(empty($this->_error)){
			$this->_passed = true;

		}

		return $this;
	}

	private function addError($error){
		$this->_error[] = $error;
	}

	public function errors(){
		return $this->_error;
	}
	public function passed(){
		return $this->_passed;
	}
}