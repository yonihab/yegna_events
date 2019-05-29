<?php

/**
* A simple redirect class
*/
class Redirect
{
	
	public static function to($path, $root = false)
	{
		
		if($root){
			$path = 'http://' . $_SERVER['HTTP_HOST'] . '/yegna_events-mvc/' . $path;
		}

		header('Location: ' . $path);
		exit();
	}
}