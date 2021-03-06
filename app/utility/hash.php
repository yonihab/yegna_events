<?php

/**
* Abstracted hash making class
*/
class Hash 
{
	// makes the hash of passed string
	public static function make($string)
	{
		return hash('sha256', $string);
	}

    // generates hash from a random number
	public static function generate(){
		return md5(rand(0,1000));
 
	}
}