<?php

/**
* 
*/
class LogIn extends Controller
{
	
	public function index(){
		// check if post is submitted or user alerdy existes in session
		if (Input::exists()) {
			// $validate = new Validate();

			// $validation = $validate->check($_POST, array(
			// 	''
			// ))
		}
		self::view('login/index');
	}
}