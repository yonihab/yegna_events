<?php

/**
* 
*/
class LogIn extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index(){

		if (isset($_POST['loginButton'])) {
			echo 'elelelelelel';
			# code...
		}
		self::view('login/index');
	}
}