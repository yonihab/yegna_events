<?php

/**
* Easy config access class
*/
class Config 
{
	private static $_configs = [];

	/**
     * Get: Returns the value of a specific key from the application
     * configuration file if it exists, otherwise returns nothing.
     * @access public
     * @param string $key
     * @return mixed
     */

	public static function get($path = null){
		// check if the private  config array variable is empty
		// if so require the array from the config file and store it in the variable
		if (empty(self::$_configs)) {
			self::$_configs = require_once './app/config.file.php';

		}
		// temp config array
		$configs = [];

		if($path){
			// pass the array to temporary variable
			$configs = self::$_configs;
			
			
			// explode the path string to array
			$path = explode('/', $path);
	
			foreach ($path as $bit) {

				if(isset($configs[$bit])){

					$configs = $configs[$bit];
					
				}
			}


		}

		return $configs;

	}
}