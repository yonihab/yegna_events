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
		$users = DB::getInstance()->query('SELECT * FROM users');

		print_r($users->result());;
		// self::view('home/index');
	}
}