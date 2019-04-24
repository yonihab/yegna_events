<?php

/**
* 
*/
class Event extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index(){

		self::view('event/index');
	}

	public function show()
	{
		
	}
}