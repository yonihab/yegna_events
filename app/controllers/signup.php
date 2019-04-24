<?php

/**
* 
*/
class SignUp extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index(){

		self::view('signup/index');
	}
}