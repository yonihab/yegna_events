<?php

/**
* A simple way to access inputs in a from
*/
class Input
{
	// Checks if a post array is set
	
	public static function exists()
	{
		if(!empty($_POST)){
			return true;
		}

		return false;
	}

	// Gets passed parameter from post array if it exists

	public static function get($name){
		if(isset($_POST[$name])){
			return $_POST[$name];
		}

		return '';
	}
}