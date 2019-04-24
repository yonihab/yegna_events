<?php

/**
* 
*/
class Category extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index(){

		self::view('category/index');
	}
}