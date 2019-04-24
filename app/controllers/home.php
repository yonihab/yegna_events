<?php

/**
* 
*/
class Home extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index(){

		self::view('home/index');
	}
}