<?php

/**
* A simple redirect class
*/
class Redirect
{
	
	public static function to($path)
	{
		header('Location: ' . $path);
		exit();
	}
}